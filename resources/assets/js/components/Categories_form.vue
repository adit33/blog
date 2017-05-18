<template>
<form class="ui form" @submit.prevent="send" method="POST" action="../categories">
  <div class="field" v-bind:class="{ error: errors.name}">
    <label>Nama Kategori</label>
    <input type="text" v-model="state.name"><div class="ui basic red pointing prompt label transition visible" v-if="errors.name">{{ error(errors.name) }}</div>
  </div>
  <button class="ui primary button" type="submit">Submit</button>
</form>
</template>

<script>
	  export default {
    data() {
      return {
        success: false,
        errors: [],
        state: {
          name: ''
        }
      }
    },
    methods: {
      send(e) {
        axios.post(e.target.action, this.state).then(response => {
          this.success = response.data.success;
          
          if(response.data.success == true) {
            this.errors = [];
            this.state = {
              name: ''
            }
          }
        }).catch(error => {
          if (error.response.status == 422) {
            this.errors = error.response.data;
          }
        })
      },
      error(field) {
        return _.head(field);
      }
    }
    }
</script>