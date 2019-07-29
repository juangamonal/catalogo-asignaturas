<template class="row">
    <form class="col-6" action="/resultados">
        <div class="form-group">
            <label for="facultad">Facultad</label>
            <select name="facultad" id="facultad" class="form-control">
                <option :value="f.id" v-for="f in facultades">{{ f.nombre }}</option>
            </select>
        </div>

        <div class="form-group">
            <label for="carrera">Carrera</label>
            <select name="carrera" id="carrera" class="form-control">
                <option :value="c.id" v-for="c in carreras">{{ c.nombre }}</option>
            </select>
        </div>

        <button class="btn btn-primary form-control">
            Buscador de asignatura
        </button>
    </form>
</template>

<script>
export default {
    data () {
        return {
            facultades: [],
            carreras: [],
            form: {
                facultad: null,
                carrera: null
            }
        }
    },
    created () {
        // obtiene facultades
        axios.get('/api/facultades')
            .then(response => {
                this.facultades = response.data;
            })
            .catch(() => {
                // TODO manejar error
            });

        // obtiene carreras
        axios.get('/api/carreras')
            .then(response => {
                this.carreras = response.data;
            })
            .catch(() => {
                // TODO manejar error
            });
    }
}
</script>

<style lang="sass">
    form
        margin: 0 auto
        padding-top: 3.5em
        padding-bottom: 3.5em
</style>