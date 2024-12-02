import './contact-info-section.scss'
import { Loader } from '@googlemaps/js-api-loader'

declare const LB_GMAP_SETTINGS: any

async function initContactInfoSection() {
  const loader = new Loader({
    apiKey: LB_GMAP_SETTINGS.gmap_api_key,
    version: 'weekly',
  })

  const els = document.querySelectorAll<HTMLElement>(
    '.lb-contact-info-section__address-map'
  )

  if (!els.length) return

  const { Map } = await loader.importLibrary('maps')
  const { PlacesService } = await loader.importLibrary('places')
  const { AdvancedMarkerElement, PinElement } = await loader.importLibrary('marker')

  document
    .querySelectorAll<HTMLElement>('.lb-contact-info-section__address-map')
    .forEach(async (el) => {
      const data = JSON.parse(el.getAttribute('data-map') || '')

      const map = new Map(el, {
        center: { lat: data.lat, lng: data.lng },
        zoom: 16,
        mapId: LB_GMAP_SETTINGS.map_id,
      })

      const service = new PlacesService(map)

      const request = {
        query: data.address,
        fields: ['name', 'geometry'],
      }

      service.findPlaceFromQuery(
        request,
        (
          results: google.maps.places.PlaceResult[] | null,
          status: google.maps.places.PlacesServiceStatus
        ) => {
          if (status === google.maps.places.PlacesServiceStatus.OK && results) {
            for (let i = 0; i < 1; i++) {
              createMarker(results[i], map)
            }

            map.setCenter(results[0].geometry!.location!)
          }
        }
      )
    })

  function createMarker(place: google.maps.places.PlaceResult, map: google.maps.Map) {
    if (!place.geometry || !place.geometry.location) return

    const pinBackground = new PinElement({
      background: 'var(--wp--preset--color--primary-600)',
      borderColor: 'var(--wp--preset--color--primary-600)',
      glyphColor: 'white',
    })

    new AdvancedMarkerElement({
      map,
      position: place.geometry.location,
      content: pinBackground.element,
    })
  }
}

initContactInfoSection()
