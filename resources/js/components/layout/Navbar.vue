<template>
    <header>
      <nav class="border-b-4 border-b-rose-600 flex-no-wrap relative flex w-full items-center justify-between bg-white lg:flex-wrap lg:justify-center sticky top-0 z-50" data-te-navbar-ref>
        <div class="flex w-full flex-wrap items-center justify-between px-6">
          <button
            class="block border-0 bg-transparent py-2 px-2.5 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
            type="button"
            data-te-collapse-init
            data-te-target="#navbarSupportedContent1"
            aria-controls="navbarSupportedContent1"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="[&>svg]:w-7">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-7 w-7">
                <path
                  fill-rule="evenodd"
                  d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                  clip-rule="evenodd" />
              </svg>
            </span>
          </button>
          <div
            class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
            id="navbarSupportedContent1"
            data-te-collapse-item>
              <router-link to="/">
                <img
                  :src="logoImg"
                  class="h-14"
                  alt=""
                  loading="lazy" />
              </router-link> &nbsp;
            <!-- Left links -->
            <ul class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row"
              data-te-navbar-nav-ref>
              <li class="lg:pr-2" data-te-nav-item-ref>
                <router-link to="/be-a-volunteer">
                  <p class="text-rose-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-zinc-400"
                    href="#"
                    data-te-nav-link-ref>
                    Be a Volunteer  
                  </p>
                </router-link>
              </li>
              <li class="lg:pr-2" data-te-nav-item-ref>
                <router-link to="/discover-charities">
                  <p class="text-rose-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-zinc-400"
                    href="#"
                    data-te-nav-link-ref>
                    Discover Charities
                  </p>
                </router-link>
              </li>
              <li class="lg:pr-2" data-te-nav-item-ref>
              <router-link to="/ways-to-donate">
                  <p class="text-rose-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-zinc-400"
                    href="#"
                    data-te-nav-link-ref>
                    Ways to Donate
                  </p>
                </router-link>
              </li>
            </ul>
            <!-- Left links -->
          </div>
          <!-- Collapsible wrapper -->
        </div>
      </nav>
      <HomeHeader v-if="isRouteHome" />
    </header>
  </template>
  <script>
    import logoImg from '/resources/assets/images/logo.png'
    import Header from './Header.vue'
    export default {
      data: function () {
        return {
          logoImg: logoImg
        }
      },
      components: {
        HomeHeader: Header
      },
      computed: {
        isRouteHome () {
          return this.$router.currentRoute.value.path === '/'
        }
      }
    }
  </script>