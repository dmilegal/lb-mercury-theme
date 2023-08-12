#!/bin/bash

shopt -s extglob

############################################################
# Consts                                                   #
############################################################
BASE_DEV_CONFIG_DIR=./config/dev
BASE_PROD_CONFIG_DIR=./config/prod
BASE_COMPOSE_FILE=./docker-compose.yml

DEV_COMPOSE_FILE="$BASE_DEV_CONFIG_DIR/docker-compose.dev.yml"
PROD_COMPOSE_FILE="$BASE_PROD_CONFIG_DIR/docker-compose.prod.yml"

ENV_DEV="$BASE_DEV_CONFIG_DIR/.env"
ENV_PROD="$BASE_PROD_CONFIG_DIR/.env"

DEV_COMPOSE="-f $BASE_COMPOSE_FILE -f $DEV_COMPOSE_FILE"
PROD_COMPOSE="-f $BASE_COMPOSE_FILE -f $PROD_COMPOSE_FILE"
DEV="docker compose $DEV_COMPOSE --project-name $(basename "$PWD")-dev"
PROD="docker compose $PROD_COMPOSE --project-name $(basename "$PWD")"

############################################################
# Help                                                     #
############################################################
help_me()
{
   # Display Help
   echo "Add description of the script functions here."
   echo
   echo "Syntax: scriptTemplate [-p|-d|-h|-r|-i|-n]"
   echo "options:"
   echo "-p          Up production docker-compose env."
   echo "-d          Up development docker-compose env."
   echo "-h          Help."
   echo "-r[p|d]     Remove prod/dev containers."
   echo "-r[p|d]i    Remove prod/dev containers and images. Type must be one of:"
   echo "            'all': Remove all images used by any service."
   echo "            'local': Remove only images that don't have a"
   echo "            custom tag set by the \`image\` field."
   echo "            Default type is 'local'."
   echo "-r[p|d]v    Remove prod/dev containers and volumes."
   echo "-r[p|d]a    Remove prod/dev containers, images, volumes."
   echo "            Type must be one of:"
   echo "            'all': Remove all images used by any service."
   echo "            'local': Remove only images that don't have a"
   echo "            custom tag set by the \`image\` field."
   echo "            Default type is 'local'."
   echo "-n[p|d]     Run docker compose command.."
   echo "            Example:"
   echo "            ./run.sh -nd down --rmi"
   echo
}

############################################################
# Check args                                               #
############################################################
check_args() {
if [[ $is_prod -eq 1 && $is_dev -eq 1 ]]
then
   echo "Can't run prod and dev at the same time"
   exit 1
fi
}

############################################################
# Get global env variables                                 #
############################################################
get_env()
{
   case $1 in
      1)
         echo "--env-file $ENV_PROD";;
      *)
         echo "--env-file $ENV_DEV";;
   esac
}

############################################################
# Get prepared command                                     #
############################################################
get_command()
{
   vars=$(get_env $1)
   case $1 in
      1) echo "$PROD $vars";;
      *) echo "$DEV $vars";;
   esac
}

############################################################
# Up                                                       #
############################################################
##
# @param $1 - prod/dev mode. 1 - dev. 0 - prod
##
up() {
   command="$(get_command $1) up -d --build"
   eval $command
}

############################################################
# Delete all containers, images, volumes                   #
############################################################
run_remove()
{
   is_prod=${1:-0}
   is_volume=${2:-0}
   is_image=${3:-0}
   is_all=${4:-0}
   type=${5:-local}

   command="$(get_command $is_prod) down"

   if (($is_volume)) || (($is_all))
   then
      command="$command -v"
   fi
   
   if (($is_image)) || (($is_all))
   then
      command="$command --rmi $type"
   fi

   eval $command
}

############################################################
# Run native docker compose command                        #
###################################4########################

##
# @param $1 - prod/dev mode. 1 - dev. 0 - prod
# @param $2 - docker compose command
##
run_native() {
   is_prod=${1:-0}
   
   eval "$(get_command $is_prod) $2"
}

############################################################
# Run command                                              #
###################################4########################
run()
{
   declare -A args

   while getopts "acdpvrhin" option
   do
      if [[ ${@:0:1} == - ]]
      then
         args[$option]=${@:$OPTIND:1}
      fi
      case $option in
         h)
            help_me
            exit;;
         a)
            local is_all=1;;
         i)
            local is_image=1;;
         v)
            local is_volume=1;;
         c)
            local is_container=1;;
         p)
            local is_prod=1;;
         d)
            local is_prod=0;;
         r)
            local is_remove=1;;
         n)
            local is_native=1;;
      esac
   done

   if (($is_remove))
   then
      run_remove ${is_prod:-0} ${is_volume:-0} ${is_image:-0} ${is_all:-0} ${args[a]}
      exit
   fi

   if (($is_native))
   then
      #shifting to docker command
      while [[ ${1:0:1} == - ]]
      do
         shift
      done

      run_native ${is_prod:-0} "$@"

      exit
   fi

   up ${is_prod:-0}
}

############################################################
############################################################
# Main program                                             #
############################################################
############################################################

############################################################
# Process the input options. Add options as needed.        #
############################################################
# Get the options

check_args
run $@