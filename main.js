const { createApp } = Vue

createApp({
    data() {
        return {
            toDo: [],
            orario: '',
            azione: ''
        }
    },
    methods: {

    },
    mounted() {
        axios.get('./server.php').then(risultato => {
            this.toDo = risultato.data;
        })
    }
}).mount('#app')