new Vue ({
    el:"#selector-app",
    data: {
        currentRoute: window.location.pathname,
        selected:'',
        option: [
            {text: 'Artist', value: 'Artist'},
            {text: 'Genre', value: 'Genre'},
            {text: 'Time Period', value: 'Time Period'}
        ],
    },
    methods: {

        }

});