<template>
    <div class="modal-container">
        <form>
            <div class="form-group">
                <label>Nombre</label>
                <input class="form-control" type="text" v-model="data.nombre">
            </div>

            <div class="form-group">
                <label>Descripción</label>
                <textarea class="form-control" v-model="data.descripcion"></textarea>
            </div>
        </form>

        <label>Prerequisitos</label>
        <ul>
            <li v-for="p in data.prerequisitos">{{ p.nombre }}</li>
        </ul>
    </div>
</template>

<script>
export default {
    props: ['id'],
    data () {
        return {
            data: {}
        }
    },
    created () {
        axios.post('/api/asignaturas/get', {asignatura: this.id})
            .then(response => {
                this.data = response.data;
            })
            .catch(() => {
                // TODO: manejar error
            });
    } 
}
</script>