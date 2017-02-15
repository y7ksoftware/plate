import {startBaseTransition, endBaseTransition} from 'transitions/timelines/base';

let BaseTransition = Barba.BaseTransition.extend({

    start() {

        window.dispatchEvent(new Event('pageTransitionStarted'));

        // Start loading the content
        // Start the  animation
        Promise.all([
            this.newContainerLoading,
            startBaseTransition(this.oldContainer),
        ])
            .then(this.finish.bind(this));

    },


    finish() {

        // done() removes the old container and sets the visibility of the new container
        this.done();

        // Scroll to page top
        // TweenLite.to(window, 0.05, {
        //     scrollTo: 0,
        // })

        endBaseTransition(this.newContainer)
            .then(() => {
                window.dispatchEvent(new Event('pageTransitionCompleted'))
            })

    },

})

export {BaseTransition};
