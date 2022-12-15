var app = new Vue({
    el: '#app',
    data: {
        db: [],
    },
    mounted() {
        
        axios.get('http://localhost/php-ajax-dischi/SecondVersion/php/')
        .then((res) =>{
            this.db = res.data;
        });
        

    },
    beforeUpdate() {

    },
    methods: {

    }
})