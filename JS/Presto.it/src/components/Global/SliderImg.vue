<template>
  <div
    class="d-flex flex-column justify-content-center px-5"
    id="sliderImg"
  >
    <span @click="left()"><i class="fas fa-chevron-left"></i></span>
    <span @click="right()"><i class="fas fa-chevron-right"></i></span>
  </div>
</template>

<script>
export default {
  name: "sliderImg",
  data() {
    return {
      index: 0,
    };
  },
  props: {
    ListImg: Array,
  },
  mounted() {
    this.default();
  },

  methods: {
    default() {
      document.getElementById(
        "sliderImg"
      ).style.backgroundImage = `url(${this.ListImg[0]})`;
    },
    left() {
      if (this.index == 0) {
        this.index = this.ListImg.length - 1;
      } else {
        this.index--;
      }
      document.getElementById("sliderImg").style.backgroundImage = `url(${
        this.ListImg[this.index]
      })`;
    },
    right() {
      if (this.index == this.ListImg.length - 1) {
        this.index = 0;
      } else {
        this.index++;
      }
      console.log(this.ListImg[this.index]);
      document.getElementById("sliderImg").style.backgroundImage = `url(${
        this.ListImg[this.index]
      })`;
    },
  },
};
</script>

<style lang="scss" scoped>
#sliderImg {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 600px;

  i {
    padding: 23px;
    background-color: var(--green);
    border-radius: 50%;
    display: inline-block;
    margin: 10px;
    margin-left: -40px;
    color: white;
    font-weight: bold;
  }
}
</style>
