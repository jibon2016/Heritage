// export default function useImageURL () {
//     function getImageUrl(name) {
//         return new URL(`/resources/images/${name}`, import.meta.url + '/public/').href
//     }
//
//     return {
//         getImageUrl,
//     }
// }

export const getImageUrl = (name) => new URL(`/resources/images/${name}`, import.meta.url + '/public/').href
