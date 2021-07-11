require('./bootstrap')

// Done by: React Developer who never uses Vue
const Fasilitas = {
  data() {
    return {
      star1: false,
      star2: false,
      star3: false,
      star4: false,
      score: 0
    }
  },
  methods: {
    toggle1() {
      this.star1 = true
      this.star2 = false
      this.star3 = false
      this.star4 = false
      this.score = 1
    },
    toggle2() {
      this.star1 = true
      this.star2 = true
      this.star3 = false
      this.star4 = false
      this.score = 2
    },
    toggle3() {
      this.star1 = true
      this.star2 = true
      this.star3 = true
      this.star4 = false
      this.score = 3
    },
    toggle4() {
      this.star1 = true
      this.star2 = true
      this.star3 = true
      this.star4 = true
      this.score = 4
    }
  }
}

Vue.createApp(Fasilitas).mount('#fasilitas')

// Done by: React Developer who never uses Vue
const Attitude = {
  data() {
    return {
      star1: false,
      star2: false,
      star3: false,
      star4: false,
      score: 0
    }
  },
  methods: {
    toggle1() {
      this.star1 = true
      this.star2 = false
      this.star3 = false
      this.star4 = false
      this.score = 1
    },
    toggle2() {
      this.star1 = true
      this.star2 = true
      this.star3 = false
      this.star4 = false
      this.score = 2
    },
    toggle3() {
      this.star1 = true
      this.star2 = true
      this.star3 = true
      this.star4 = false
      this.score = 3
    },
    toggle4() {
      this.star1 = true
      this.star2 = true
      this.star3 = true
      this.star4 = true
      this.score = 4
    }
  }
}

Vue.createApp(Attitude).mount('#attitude')

// Done by: React Developer who never uses Vue
const Kinerja = {
  data() {
    return {
      star1: false,
      star2: false,
      star3: false,
      star4: false,
      score: 0
    }
  },
  methods: {
    toggle1() {
      this.star1 = true
      this.star2 = false
      this.star3 = false
      this.star4 = false
      this.score = 1
    },
    toggle2() {
      this.star1 = true
      this.star2 = true
      this.star3 = false
      this.star4 = false
      this.score = 2
    },
    toggle3() {
      this.star1 = true
      this.star2 = true
      this.star3 = true
      this.star4 = false
      this.score = 3
    },
    toggle4() {
      this.star1 = true
      this.star2 = true
      this.star3 = true
      this.star4 = true
      this.score = 4
    }
  }
}

Vue.createApp(Kinerja).mount('#kinerja')
