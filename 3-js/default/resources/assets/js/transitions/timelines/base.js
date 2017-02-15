// import {TimelineMax} from 'vendor/gsap/TweenMax.min'

export function startBaseTransition(oldContainer) {


    // let timeline = new TimelineMax({pause: true})

    return new Promise((resolve) => {

        // timeline
        //     .to(oldContainer, 0.4, {
        //         opacity: 0,
        //         y: 10,
        //     })
        //
        // timeline.vars.onComplete = resolve
        //
        // timeline.play()
        resolve()

    })

}

export function endBaseTransition(newContainer) {

    // let timeline = new TimelineMax({pause: true})

    return new Promise((resolve) => {

        // timeline
        //     .from(newContainer, 0.6, {
        //         opacity: 0,
        //         y: 10
        //     })
        //
        // timeline.vars.onComplete = resolve
        //
        // timeline.play()
        resolve()

    })

}


