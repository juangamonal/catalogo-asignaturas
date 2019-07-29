<template>
    <div id="table-container">
        <table id="asignaturas" class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th></th>
                    <th>Código</th>
                    <th>Asignatura</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(a, i) in asignaturas">
                    <td>{{ i + 1 }}</td>
                    <td>
                        <button class="btn btn-sm btn-primary" @click="showModal(a.id)">
                            <i class="fa fa-info-circle"></i>
                        </button>
                    </td>
                    <td>
                        {{ a.codigo }}
                    </td>
                    <td>
                        {{ a.nombre }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props: ['facultad', 'carrera'],
    data () {
        return {
            asignaturas: []
        }
    },
    created () {
        axios.post('/api/asignaturas', this._props)
            .then(response => {
                this.asignaturas = response.data;

                this.dt();
            })
            .catch(() => {
                // TODO: handle error
            });
    },
    methods: {
        dt () {
            this.$nextTick(() => {
                require('datatables.net-bs4');
                $('#asignaturas').DataTable({
                    lengthChange: false
                });
            });
        },

        showModal (id) {
            this.$modal.show(
                require('./Info.vue').default,
                {id: id},
                {height: 'auto'}
            )
        }
    }
}
</script>

<style lang="sass" scoped>
    #table-container
        padding: 2em 5em
</style>
