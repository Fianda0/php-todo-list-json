const { createApp } = Vue

createApp({
    data() {
        return {
            toDo: [],
            orario: '',
            azione: '',
            postRequestConfig: {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }
        }
    },
    methods: {
        addElement() {
            const newAction = {
                orario: this.orario,
                azione: this.azione
            };


            axios.post('./lista.php', newAction, this.postRequestConfig).then(result => {
                console.log(newAction)
            });
        }

    },
    mounted() {


        axios.get('./lista.php').then(risultato => {
            this.toDo = risultato.data;
        })
    }
}).mount('#app')