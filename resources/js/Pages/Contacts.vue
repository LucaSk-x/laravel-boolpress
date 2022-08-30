<template>
  <div class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-10">
          <form @submit.prevent="onFormSubmit">
            <div class="form-floating mb-4">
              <input type="text" class="form-control" id="floatingInput" v-model="name" placeholder="Inserisci il tuo nome">
              <label for="floatingInput">Nome</label>
            </div>
            <div class="form-floating mb-4">
              <input type="text" class="form-control" id="floatingInput" v-model="lastName" placeholder="Inserisci il tuo cognome">
              <label for="floatingInput">cognome</label>
            </div>
            <div class="form-floating mb-4">
              <input type="email" class="form-control" id="floatingInput" v-model="eMail" placeholder="name@example.com">
              <label for="floatingInput"> Indirizzo Email</label>
            </div>
            <div class="form-floating mb-4">
              <input type="number" class="form-control" id="floatingInput" v-model="number" placeholder="Inserisci il tuo numero di telefono">
              <label for="floatingInput">Numero di telefono </label>
            </div>
            <div class="d-flex">
              <button type="submit" class="btn btn-outline-primary  m-auto">Invia</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import axios from "axios";
export default {
  data() {
    return {
      name: "",
      lastName: "",
      eMail: "",
      number: ""
    }
  },

  methods: {
    onFormSubmit() {
      axios.post("/api/contacts", {
        name: this.name,
        lastName: this.lastName,
        eMail: this.eMail,
        number: this.number
      })
    }
  }
}
</script>

<style lang="scss">
</style>

