<template>
  <div>

    <div class="md-layout md-gutter">
      <div class="md-layout-item">
        <md-field>
          <md-select  name="country" id="country" placeholder="Country" v-model="change">
            <md-option></md-option>
            <md-option v-for="country in countries" :value="country.id" :key="country.id" >{{country.name}}</md-option>
          </md-select>
        </md-field>
      </div>

    </div>

    <div class="md-layout">
    <md-table md-card>
      <md-table-toolbar>
        <h1 class="md-title">Recipe List</h1>
      </md-table-toolbar>

      <md-table-row>
        <md-table-head md-numeric>ID</md-table-head>
        <md-table-head >Image</md-table-head>
        <md-table-head>Name</md-table-head>
        <md-table-head>Description</md-table-head>
        <md-table-head>Country</md-table-head>
      </md-table-row>

      <md-table-row v-for="recipe in recipes" :key="recipe.id">
        <md-table-cell md-numeric>{{recipe.recipe_id}}</md-table-cell>

        <md-table-cell>
          <img width="70" height="70" :src="recipe.image_url" alt="image">

        </md-table-cell>
        <md-table-cell>{{recipe.recipe_name}}</md-table-cell>
        <md-table-cell>{{recipe.description}}</md-table-cell>
        <md-table-cell>{{recipe.country}}</md-table-cell>

      </md-table-row>

    </md-table>
    </div>
  </div>
</template>

<script>

import RecipeService from '../services/recipes-service'
import CountryService from '../services/countries-service'
export default {
  name: 'Home',

  components: {
    RecipeService,
    CountryService,
  },

  data() {
    return {
      recipes: [],
      countries: [],
      country: {
          co_id: "",
      },
      countryId: "",
      change: "",
    };
  },

  methods: {
    async getRecipes() {
      this.recipes = await RecipeService.list(this.country).then((response) => {
        return response.list.data;
      });
    },

    async getCountries() {
      this.countries = await CountryService.list().then((response) => {
        return response.list.data;
      });
    },

  },

  created() {

  },

  mounted() {
    this.getRecipes();
    this.getCountries();
  },

  watch: {
    change: function(event) {
      // console.log(event);
      this.country.co_id = event;
      this.getRecipes();
    }
  }


};



</script>

<style lang="scss" scoped>
.md-layout {
  width: 1200px;
  margin: 4px;
  display: inline-block;
  vertical-align: top;
}
</style>
