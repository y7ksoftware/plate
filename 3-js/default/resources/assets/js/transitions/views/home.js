
export default Barba.BaseView.extend({

    namespace: 'home',

    onEnter() {
        // The new Container is ready and attached to the DOM.
    },

    onEnterCompleted() {
        // The Transition has just finished.
    },

    onLeave() {
        // A new Transition toward a new page has just started.
    },

    onLeaveCompleted() {
        // The Container has just been removed from the DOM.
    }
})

