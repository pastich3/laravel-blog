<template>
  <div>
    <div class="form-group">
      <div>
        <text
          v-model="user_name"
          class="form-control"
          :class="{ 'is-invalid' : errors['user_name'] }"
          :placeholder="userNamePlaceholder"
        />

        <span
          v-if="errors['user_name']"
          class="invalid-feedback"
        >{{ errors['user_name'][0] }}</span>

        <label for="user_name"> {{userNameLabel}} </label>
      </div>
      <div>
        <text
          v-model="user_email"
          class="form-control"
          :class="{ 'is-invalid' : errors['user_email'] }"
          :placeholder="userNamePlaceholder"
        />

        <span
          v-if="errors['user_email']"
          class="invalid-feedback"
        >{{ errors['user_email'][0] }}</span>

        <label for="user_email"> {{userNameLabel}} </label>
      </div>
      <div>
        <text
          v-model="company_name"
          class="form-control"
          :class="{ 'is-invalid' : errors['company_name'] }"
          :placeholder="userNamePlaceholder"
        />

        <span
          v-if="errors['company_name']"
          class="invalid-feedback"
        >{{ errors['company_name'][0] }}</span>

        <label for="company_name"> {{userNameLabel}} </label>
      </div>
    </div>

    <div class="form-group text-right">
      <button
        class="btn btn-primary"
        :disabled="isDisabled"
        @click="sendComment"
      >
        <i
          v-if="isLoading"
          class="fa fa-spinner fa-spin fa-fw"
        />
        {{ button }}
      </button>
    </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  props: {

    userNamePlaceholder: {
      type: String,
      default: null
    },
    userEmailPlaceholder: {
      type: String,
      default: null
    },
    companyNamePlaceholder: {
      type: String,
      default: null
    },

    button: {
      type: String,
      required: true
    }
  },

  data () {
    return {
      content: '',
      isLoading: false,
      errors: []
    }
  },

  computed: {
    isDisabled () {
      return this.isLoading || this.content.length === 0
    }
  },

  methods: {
    sendComment () {
      this.isLoading = true

      axios
        .post(`/api/v1/posts/${this.postId}/comments`, {
          content: this.content
        })
        .then(({ data }) => {
          Event.$emit('added', data.data)

          this.content = ''
          this.isLoading = false
          this.errors = []
        })
        .catch(error => {
          this.isLoading = false
          this.errors = error.response.data.errors
        })
    }
  }
}
</script>
