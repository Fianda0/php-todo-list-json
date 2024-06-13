const { createApp } = Vue

createApp({
    data() {
        return {
            toDo: []
        }
    },
    methods: {

    },
    mounted() {
        axios.get('./server.php').then(risultato => {
            console.log(risultato.data);
        })
    }
}).mount('#app')