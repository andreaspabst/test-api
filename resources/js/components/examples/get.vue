<template>
    <div>
        <p>Vue JS Beispiel</p>
        <div class="lds-dual-ring" v-if="loading"></div>
        <template v-else>
            <template v-if="items.length > 0">
                <ul>
                    <li v-for="item in items.slice(0,maxItems)" :key="item.id">{{item.title}}</li>
                    <li v-if="items.length - maxItems - steps >= 0">
                        Und noch {{further}} weitere,... <hr>
                        <button class="btn btn-secondary" @click="maxItems = maxItems + steps">weitere {{steps}} zeigen...</button>
                    </li>
                </ul>
            </template>
            <template v-else>
                <button class="btn btn-primary mr-2" @click="getData">Laden</button>
                Mit dem Klick auf "Laden" werden Todos geladen
            </template>
        </template>
    </div>
</template>
<script>
export default {
    data: ()=>({
        loading: false,
        steps: 10,
        maxItems: 10,
        items:[]
    }),
    methods: {
        async getData() {
            this.loading = true;
            try {
                let todos = await this.axios.get('/api/todos');
                this.items = todos.data;
                this.loading = false;
            } catch(e) {
                this.loading = false;
                console.error(e);
            }
        }
    },
    computed: {
        further() { console.log(this.items.length);
            return this.items.length - this.maxItems;
        }
    }
}
</script>
<style scoped>
.lds-dual-ring {
  display: inline-block;
  width: 80px;
  height: 80px;
}
.lds-dual-ring:after {
  content: " ";
  display: block;
  width: 64px;
  height: 64px;
  margin: 8px;
  border-radius: 50%;
  border: 6px solid #000;
  border-color: #000 transparent #000 transparent;
  animation: lds-dual-ring 1.2s linear infinite;
}
@keyframes lds-dual-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
</style>
