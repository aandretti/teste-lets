<template>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-6">
        <div class="card card-default">
          <div class="card-header">Register a Package</div>
          <div class="card-body">
            <div v-if="message" class="alert">{{ message }}</div>
            <form @submit.prevent="onSubmit($event)">
              <div class="form-group">
                <label for="package_name">Name</label>
                <input class="form-control" id="package_name" v-model="pack.name" />
              </div>
              <div class="form-group">
                <label for="package_description">Description</label>
                <input class="form-control" id="package_description" v-model="pack.description" />
              </div>
              <div class="form-group">
                <label for="package_code">Tracking Code</label>
                <input class="form-control" id="package_code" v-model="pack.tracking_code" />
              </div>
              <div class="form-group">
                <label for="package_cep">CEP</label>
                <input class="form-control" id="package_cep" v-model="pack.cep" />
              </div>
              <div class="form-group">
                <label for="package_street">Street</label>
                <input class="form-control" id="package_street" v-model="pack.street" />
              </div>
              <div class="form-group">
                <label for="package_number">Number</label>
                <input class="form-control" id="package_number" v-model="pack.number" />
              </div>
              <div class="form-group">
                <label for="package_addition">Addition</label>
                <input class="form-control" id="package_addition" v-model="pack.addition" />
              </div>
              <div class="form-group">
                <label for="package_district">District</label>
                <input class="form-control" id="package_district" v-model="pack.district" />
              </div>
              <div class="form-group">
                <label for="package_state">State</label>
                <input class="form-control" id="package_state" v-model="pack.state" />
              </div>
              <div class="form-group">
                <label for="package_city">City</label>
                <input class="form-control" id="package_city" v-model="pack.city" />
              </div>
              <div class="form-group">
                <label for="package_status">Status</label>
                <input class="form-control" id="package_status" v-model="pack.status" />
              </div>
              <div class="form-group">
                <button
                  class="btn btn-primary"
                  type="submit"
                  :disabled="saving"
                >{{ saving ? 'Registering...' : 'Register' }}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import api from '../../api/packages';

export default {
  data() {
    return {
      saving: false,
      message: false,
      pack: {
        name: "",
        description: "",
        tracking_code: "",
        cep: "",
        street: "",
        number: "",
        addition: "",
        district: "",
        state: "",
        city: "",
        status: ""
      }
    };
  },
  methods: {
    onSubmit($event) {
      this.saving = true;
      this.message = false;
      api.create(this.pack).then((data) => {
          console.log(data);
      }).catch((e) => {
          this.message = e.response.data.message || 'There was an issue registering the package.';
      }).then(() => {
          this.saving = false;
      })
    }
  }
};
</script>