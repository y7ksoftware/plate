import {startTransition, endTransition} from 'transitions/timelines/base'

export default Barba.BaseTransition.extend({

    start() {

        Barba.Dispatcher.trigger('startTransitionStarted')

        // Start loading the content
        // Start the animation
        Promise.all([
            this.newContainerLoading,
            startTransition(this.oldContainer),
        ])
            .then(this.finish.bind(this))

    },


    finish() {

        Barba.Dispatcher.trigger('startTransitionEnded')
        Barba.Dispatcher.trigger('endTransitionStarted')

        // done() removes the old container and sets the visibility of the new container
        this.done()

        // Scroll to page top
        document.body.scrollTop = 0;

        endTransition(this.newContainer)
            .then(() => {
                Barba.Dispatcher.trigger('endTransitionEnded')
            })

    },

})
