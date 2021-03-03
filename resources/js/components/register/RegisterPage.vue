<template>
  <header>
    <slot name="navbar"></slot>
    <div class="container p-5">
      <div class="row">
        <div class="col">
          <h1>Registrazione nuovo ristorante</h1>
        </div>
      </div>
      <div class="row m-3">
        <div class="col-12">
          <p>ACCOUNT</p>
        </div>
        <div class="col-6">
          <input
            class="custom-input"
            type="text"
            name=""
            id=""
            placeholder="Nome"
          />
        </div>
        <div class="col-6">
          <input
            class="custom-input"
            type="text"
            name=""
            id=""
            placeholder="Cognome"
          />
        </div>
        <div class="col-6">
          <input
            v-model="email"
            class="custom-input"
            type="email"
            name=""
            id=""
            placeholder="Email"
          />
        </div>
        <div class="col-6">
          <input
            v-model="confirmEmail"
            class="custom-input"
            type="email"
            name=""
            id=""
            placeholder="Conferma email"
          />
        </div>
        <div class="col-6">
          <input
            v-model="password"
            class="custom-input"
            type="password"
            name=""
            id=""
            placeholder="Password"
          />
        </div>
        <div class="col-6">
          <input
            v-model="confirmPassword"
            class="custom-input"
            type="password"
            name=""
            id=""
            placeholder="Conferma password"
          />
        </div>
        <div class="col-12" v-if="passwordHint">
          <p>La password deve rispettare i seguenti criteri:</p>
          <ul>
            <li :class="{'green' : password.length >= 8, 'red' : password.length < 8}">Contenere minimo 8 caratteri.</li>
            <li :class="{'green' : password.match(/[A-Z]/g), 'red' : !password.match(/[A-Z]/g)}">Contenere una lettera maiuscola.</li>
            <li :class="{'green' : password.match(/[0-9]/g), 'red' : !password.match(/[0-9]/g)}">Contenere un numero.</li>
            <li :class="{'green' : password.match(/[!@#$%^&*+=-]/), 'red' : !password.match(/[!@#$%^&*+=-]/)}">Contenere un carattere speciale.</li>
          </ul>
        </div>
      </div>
      <div class="row m-3">
        <div class="col-12">
          <p>INFORMAZIONI RISTORANTE</p>
        </div>
        <div class="col-12">
          <input
            class="custom-input"
            type="text"
            name=""
            id=""
            placeholder="Nome Ristorante"
          />
        </div>
        <div class="col-12">
          <input
            class="custom-input"
            type="text"
            name=""
            id=""
            placeholder="Ragione Sociale"
          />
        </div>
        <div class="col-12">
          <input
            class="custom-input"
            type="text"
            name=""
            id=""
            placeholder="Indirizzo"
          />
        </div>
        <div class="col-6">
          <input
            class="custom-input"
            type="text"
            name=""
            id=""
            placeholder="CAP"
          />
        </div>
        <div class="col-6">
          <input
            class="custom-input"
            type="text"
            name=""
            id=""
            placeholder="Città"
          />
        </div>
        <div class="col-12">
          <input
            class="custom-input"
            type="text"
            name=""
            id=""
            placeholder="Codice Fiscale"
          />
        </div>
        <div class="col-12">
          <input
            class="custom-input"
            type="text"
            name=""
            id=""
            placeholder="Partita IVA"
          />
        </div>
      </div>
      <div class="col d-flex justify-content-end align-items-center">
        <button @click="validate()">REGISTRATI</button>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: "RegisterPage",
  data() {
    return {
      emailErr: false,
      passwordHint: false,
      passwordError: false,
      email: '',
      confirmEmail:'',
      password:'',
      confirmPassword:'',
    };
  },
  methods: {
    validate() {
        var upperCaseLetter = /[A-Z]/g;
        var numbers = /[0-9]/g;
        var symbols = /[!@#$%^&*+=-]/;
        if((this.password.match(upperCaseLetter)) && (this.password.match(numbers)) && (this.password.match(symbols)) && (this.password.length >= 8)){
            console.log("Password OK")
        }else{
            this.passwordHint = true;
            console.log(this.passwordHint);
        }
    },
  },
};
</script>

<style lang="scss" scoped>
div.container {
  height: auto;
}
.green{
  color: green;
}
.red{
  color: red;
}
</style>