<template>
  <div class="relative overflow-hidden bg-white-200"
    style="
      background-position: 50%;
      height: 350px;">
    <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed"
      style="background-color: rgba(0, 0, 0, 0.0)">
      <div class="flex h-full items-center justify-center">
        <div class="px-6 text-center text-black md:px-12">
          <h1 class="mb-6 text-5xl font-bold">DONATIONS</h1>
          <h3 class="mb-8 text-1xl">
            There are many ways to support Sugod na Sugbo and help those in need. If you have the means, you can donate money to help cover the costs of essential goods and services. Clothing, food, and other essentials are also crucial items that you can donate to support those who are struggling. Medical equipment and medicines are also in high demand, especially during times of crisis, and donating these items can help save lives. In addition to these essential items, there are also other ways you can support Sugod na Sugbo, such as volunteering your time or sharing information about the organization with your community. Whatever you can donate, big or small, can make a significant impact and help those in need.
          </h3>
          <div class="grid grid-cols-4 gap-4">
            <div class="text-2xl">
              <font-awesome-icon icon="fa-solid fa-mobile" class="font-white-500 text-4xl mr-2"/>
              Online
            </div>
            <div class="text-2xl">
              <font-awesome-icon icon="fa-solid fa-wallet" class="font-white-500 text-4xl mr-2"/>
              Mobile Wallet
            </div>
            <div class="text-2xl">
              <font-awesome-icon icon="fa-solid fa-credit-card" class="font-white-500 text-4xl mr-2"/>
              Bank
            </div>
            <div class="text-2xl">
              <font-awesome-icon icon="fa-solid fa-earth-asia" class="font-white-500 text-4xl mr-2"/>
              In-Kind
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="relative overflow-hidden bg-cover bg-no-repeat"
    style="
      background-position: 50%;
      background-image: url('https://www.linkpicture.com/q/126378398_203752161275788_7037557439836788159_n.jpg');
      height: 350px;">
    <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed"
      style="background-color: rgba(0,0,0, 0.70)">
      <div class="flex h-full items-center justify-center">
        <div class="px-6 text-center text-white md:px-12">
          <h1 class="mb-6 text-5xl font-bold">BE A VOLUNTEER</h1>
          <h3 class="mb-8 text-1xl">
            Volunteering for Sugod na Sugbo can be a fantastic way to give back to your community and make a positive impact in the lives of those in need. Whether you choose to donate your time, resources, or skills, every contribution counts and can make a difference. By volunteering, you can also gain valuable experiences, develop new skills, and meet new people who share the same passion for helping others. If you're looking for a fulfilling and rewarding way to give back, becoming a Sugod na Sugbo volunteer could be the perfect opportunity for you.
          </h3>
          <router-link to="/be-a-volunteer">
            <button type="button" class="inline-block bg-rose-500 p-5 w-60 text-xl">Volunteer</button>
          </router-link>
        </div>
      </div>
    </div>
  </div>
  <div class="relative overflow-hidden bg-black"
    style="
      background-position: 50%;
      height: 450px;">
    <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed"
      style="background-color: rgba(0, 0, 0, 0.0)">
      <div class="static flex h-full items-center justify-center">
        <div class="static flex-1 w-50">
          <div class="px-6 text-center text-white md:px-12">
            <h1 class="mb-6 text-5xl font-bold">OUR CHARITIES</h1>
            <h3 class="mb-2 text-1xl">
            Sugod na Sugbo is a local charity organization that aims to improve the lives of underprivileged communities in Cebu, Philippines. They provide aid in various forms such as food assistance, educational support, and medical assistance. The organization is run by passionate volunteers who dedicate their time and effort to make a positive impact in their community. Through their various initiatives and programs, Sugod na Sugbo has been able to make a difference in the lives of many people in Cebu. If you're looking for a charity to support, Sugod na Sugbo is definitely one to consider.
            </h3>
            <router-link to="/discover-charities">
              <button type="button" class="inline-block text-rose-500 p-5 w-60 text-lg">More of our charities →</button>
            </router-link>
          </div>
        </div>
        <div class="static flex-2 w-50">
          <div class="flex">
              <img src="https://www.linkpicture.com/q/91786236_111836280467377_4761195054066827264_n_2.jpg">
          </div>
        </div>
        <div>
        </div>
      </div>
    </div>
  </div>
  <div class="relative overflow-hidden bg-white-200"
    style="height: 600px;">
    <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed"
      style="background-color: rgba(0,0,0, 0.00)">
      <div class="flex h-full items-center justify-center">
        <div class="px-6 text-center text-black md:px-12">
        <h1 class="mb-6 text-5xl font-bold">Have a question for us?</h1>
          <div class="container mx-auto">
            <label class="block">
              <span class="text-gray-700 text-left">What's your name?</span>
              <input
                v-model="name"
                type="text"
                class="
                  mt-1
                  block
                  w-full
                  rounded-md
                  bg-gray-100
                  border-transparent
                  focus:border-gray-500 focus:bg-white focus:ring-0
                "
                placeholder=""/>
            </label>
              <label class="block">
              <span class="text-gray-700">Email address</span>
              <input
                v-model="emailAddress"
                type="email"
                class="
                  mt-1
                  block
                  w-full
                  rounded-md
                  bg-gray-100
                  border-transparent
                  focus:border-gray-500 focus:bg-white focus:ring-0
                "
                placeholder="john@example.com"
              />
            </label>
            <label class="block">
              <span class="text-gray-700">Message</span>
              <textarea
                v-model="message"
                class="
                  mt-1
                  block
                  w-full
                  rounded-md
                  bg-gray-100
                  border-transparent
                  focus:border-gray-500 focus:bg-white focus:ring-0
                "
                rows="4"></textarea>
            </label>
          </div>
          <button type="button" class="inline-block rounded-md bg-green-500 p-5 w-50 text-md m-8" @click="sendInquiry">Send inquiry</button>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from 'axios'
export default {
  data: function () {
    return {
      name: '',
      emailAddress: '',
      message: ''
    }
  },
  methods: {
    async sendInquiry() {
      await axios.post("http://localhost:8000/api/createInquiries", {
        name: this.name,
        emailAddress: this.emailAddress,
        message: this.message
      })
      .then( response => {
        console.log('message sent', response)
        this.clearInquiryForm()
        alert('Thank you for sending your inquiries. We will respond very soon!')
      })
      .catch(error => {
        console.log(error)
      });
    },
    clearInquiryForm () {
      this.name = ''
      this.emailAddress = ''
      this.message = ''
    }
  }
}
</script>