//import {TimelineLite} from 'gsap'

export function startTransition(oldContainer) {

    return new Promise((resolve) => {

        // Example with GSAP
        //
        // new TimelineLite()
        //     .to(oldContainer, 0.5, {
        //         opacity: 0,
        //         onComplete: resolve
        //     })

        // Remove this, if you use the animation above!
        resolve()

    })

}

export function endTransition(newContainer) {

    return new Promise((resolve) => {

        // Example with GSAP
        //
        // new TimelineLite()
        //     .from(newContainer, 0.5, {
        //         opacity: 0,
        //         onComplete: resolve
        //     })

        // Remove this, if you use the animation above!
        resolve()
    })

}


