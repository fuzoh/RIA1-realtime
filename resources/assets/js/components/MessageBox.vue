<script>
export default {
  name: 'MessageBox',
  data () {
    return {
      messages: []
    }
  },
  mounted () {
    this.fetchMessages()
  },
  methods: {
    fetchMessages () {
      window.axios.get('api/messages').then((res) => {
        console.log(res.data.data)
        this.messages.push(res.data.data)
      }).catch((e) => {
        console.error(e)
      })
    }
  }
}
</script>

<template>
  <div id="message-box" class="card">
    <div class="card-header"><strong>Messages</strong></div>

    <ul class="list-group list-group-flush">

      <li class="list-group-item" v-for="(value, key) of messages" :key="value.id">
        {{key}}
        <!-- <p>{{ value.content }}</p><small class="text-right"> {{ value.user.name }}</small> -->
      </li>
    </ul>

    <div class="card-footer">
      <div class="input-group mb-3">
        <input id="message" type="text" class="form-control" placeholder="Message" aria-label="Message" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button id="send" class="btn btn-outline-secondary" type="button">Send</button>
        </div>
      </div>
    </div>
  </div>
</template>
