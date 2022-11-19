<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";

defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
  laravelVersion: String,
  phpVersion: String,
});
</script>

<template>
  <div class="p-6 pb-16">
    <div class="flex flex-col-reverse justify-between gap-6 xl:flex-row">
      <div class="prose w-full max-w-4xl flex-grow">
        <h1>Navbar</h1>
        <p>Navbar is used to show a navigation bar on the top of the page.</p>
        <div class="not-prose mt-6 mb-10 overflow-x-auto">
          <table class="table-compact table w-full">
            <thead>
              <tr>
                <th class="flex items-center gap-2 normal-case">
                  <div class="tooltip tooltip-right font-normal" data-tip="Add custom prefix">
                    <input class="input input-bordered input-xs w-min max-w-[3.8rem]" type="text"
                      placeholder="Prefix–" />
                  </div>
                  <span>Class name</span>
                </th>
                <th class="normal-case">Type</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="font-normal">
                  <span class="font-mono lowercase">navbar</span>
                </th>
                <td>
                  <span class="badge badge-sm badge-ghost w-20">Component</span>
                </td>
                <td>Container element</td>
              </tr>
              <tr>
                <th class="font-normal">
                  <span class="font-mono lowercase">navbar-start</span>
                </th>
                <td>
                  <span class="badge badge-sm badge-ghost w-20">Component</span>
                </td>
                <td>Child element, fills 50% of width to be on start</td>
              </tr>
              <tr>
                <th class="font-normal">
                  <span class="font-mono lowercase">navbar-center</span>
                </th>
                <td>
                  <span class="badge badge-sm badge-ghost w-20">Component</span>
                </td>
                <td>Child element, fills remaining space to be on center</td>
              </tr>
              <tr>
                <th class="font-normal">
                  <span class="font-mono lowercase">navbar-end</span>
                </th>
                <td>
                  <span class="badge badge-sm badge-ghost w-20">Component</span>
                </td>
                <td>Child element, fills 50% of width to be on end</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="component-preview not-prose text-base-content my-4 max-w-4xl" id="navbar-with-title-only">
          <div class="pb-2 text-sm font-bold">
            <a class="opacity-20 hover:opacity-60" href="#navbar-with-title-only">#</a>
            <span class="component-preview-title">Navbar with title only</span>
          </div>
          <div class="grid">
            <div class="tabs z-10 -mb-px">
              <button class="tab tab-lifted tab-active [--tab-bg:hsl(var(--b2))]">
                Preview
              </button>
              <button class="tab tab-lifted [--tab-border-color:transparent]">
                HTML
              </button>
              <button class="tab tab-lifted [--tab-border-color:transparent]">
                JSX
              </button>
              <div class="
                  tab tab-lifted
                  mr-6
                  flex-1
                  cursor-default
                  [--tab-border-color:transparent]
                "></div>
            </div>
            <div class="
                bg-base-300
                rounded-b-box rounded-tr-box
                relative
                overflow-x-auto
              ">
              <div class="
                  preview
                  border-base-300
                  bg-base-200
                  rounded-b-box rounded-tr-box
                  flex
                  min-h-[6rem] min-w-[18rem]
                  max-w-4xl
                  flex-wrap
                  items-center
                  justify-center
                  gap-2
                  overflow-x-hidden
                  border
                  bg-cover bg-top
                  p-4
                  undefined
                " style="background-size: 5px 5px">
                <div class="navbar bg-base-100 shadow-xl rounded-box">
                  <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="component-preview not-prose text-base-content my-4 max-w-4xl" id="navbar-with-title-and-icon">
          <div class="pb-2 text-sm font-bold">
            <a class="opacity-20 hover:opacity-60" href="#navbar-with-title-and-icon">#</a>
            <span class="component-preview-title">Navbar with title and icon</span>
          </div>
          <div class="grid">
            <div class="tabs z-10 -mb-px">
              <button class="tab tab-lifted tab-active [--tab-bg:hsl(var(--b2))]">
                Preview
              </button>
              <button class="tab tab-lifted [--tab-border-color:transparent]">
                HTML
              </button>
              <button class="tab tab-lifted [--tab-border-color:transparent]">
                JSX
              </button>
              <div class="
                  tab tab-lifted
                  mr-6
                  flex-1
                  cursor-default
                  [--tab-border-color:transparent]
                "></div>
            </div>
            <div class="
                bg-base-300
                rounded-b-box rounded-tr-box
                relative
                overflow-x-auto
              ">
              <div class="
                  preview
                  border-base-300
                  bg-base-200
                  rounded-b-box rounded-tr-box
                  flex
                  min-h-[6rem] min-w-[18rem]
                  max-w-4xl
                  flex-wrap
                  items-center
                  justify-center
                  gap-2
                  overflow-x-hidden
                  border
                  bg-cover bg-top
                  p-4
                  undefined
                " style="background-size: 5px 5px">
                <div class="navbar bg-base-100 shadow-xl rounded-box">
                  <div class="flex-1">
                    <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
                  </div>
                  <div class="flex-none">
                    <button class="btn btn-square btn-ghost">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="inline-block w-5 h-5 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="component-preview not-prose text-base-content my-4 max-w-4xl"
          id="navbar-with-icon-at-start-and-end">
          <div class="pb-2 text-sm font-bold">
            <a class="opacity-20 hover:opacity-60" href="#navbar-with-icon-at-start-and-end">#</a>
            <span class="component-preview-title">Navbar with icon at start and end</span>
          </div>
          <div class="grid">
            <div class="tabs z-10 -mb-px">
              <button class="tab tab-lifted tab-active [--tab-bg:hsl(var(--b2))]">
                Preview
              </button>
              <button class="tab tab-lifted [--tab-border-color:transparent]">
                HTML
              </button>
              <button class="tab tab-lifted [--tab-border-color:transparent]">
                JSX
              </button>
              <div class="
                  tab tab-lifted
                  mr-6
                  flex-1
                  cursor-default
                  [--tab-border-color:transparent]
                "></div>
            </div>
            <div class="
                bg-base-300
                rounded-b-box rounded-tr-box
                relative
                overflow-x-auto
              ">
              <div class="
                  preview
                  border-base-300
                  bg-base-200
                  rounded-b-box rounded-tr-box
                  flex
                  min-h-[6rem] min-w-[18rem]
                  max-w-4xl
                  flex-wrap
                  items-center
                  justify-center
                  gap-2
                  overflow-x-hidden
                  border
                  bg-cover bg-top
                  p-4
                  undefined
                " style="background-size: 5px 5px">
                <div class="navbar bg-base-100 shadow-xl rounded-box">
                  <div class="flex-none">
                    <button class="btn btn-square btn-ghost">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="inline-block w-5 h-5 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"></path>
                      </svg>
                    </button>
                  </div>
                  <div class="flex-1">
                    <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
                  </div>
                  <div class="flex-none">
                    <button class="btn btn-square btn-ghost">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="inline-block w-5 h-5 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="component-preview not-prose text-base-content my-4 max-w-4xl" id="navbar-with-menu-and-submenu">
          <div class="pb-2 text-sm font-bold">
            <a class="opacity-20 hover:opacity-60" href="#navbar-with-menu-and-submenu">#</a>
            <span class="component-preview-title">Navbar with menu and submenu</span>
          </div>
          <div class="grid">
            <div class="tabs z-10 -mb-px">
              <button class="tab tab-lifted tab-active [--tab-bg:hsl(var(--b2))]">
                Preview
              </button>
              <button class="tab tab-lifted [--tab-border-color:transparent]">
                HTML
              </button>
              <button class="tab tab-lifted [--tab-border-color:transparent]">
                JSX
              </button>
              <div class="
                  tab tab-lifted
                  mr-6
                  flex-1
                  cursor-default
                  [--tab-border-color:transparent]
                "></div>
            </div>
            <div class="
                bg-base-300
                rounded-b-box rounded-tr-box
                relative
                overflow-x-auto
              ">
              <div class="
                  preview
                  border-base-300
                  bg-base-200
                  rounded-b-box rounded-tr-box
                  flex
                  min-h-[6rem] min-w-[18rem]
                  max-w-4xl
                  flex-wrap
                  items-center
                  justify-center
                  gap-2
                  overflow-x-hidden
                  border
                  bg-cover bg-top
                  p-4
                  undefined
                " style="background-size: 5px 5px">
                <div class="navbar bg-base-100 mb-32 shadow-xl rounded-box">
                  <div class="flex-1">
                    <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
                  </div>
                  <div class="flex-none">
                    <ul class="menu menu-horizontal p-0 bg-base-100">
                      <li><a>Item 1</a></li>
                      <li tabindex="0">
                        <a>Parent
                          <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 24 24">
                            <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"></path>
                          </svg>
                        </a>
                        <ul class="p-2 bg-base-100">
                          <li><a>Submenu 1</a></li>
                          <li><a>Submenu 2</a></li>
                        </ul>
                      </li>
                      <li><a>Item 3</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="component-preview not-prose text-base-content my-4 max-w-4xl"
          id="navbar-with-search-input-and-dropdown">
          <div class="pb-2 text-sm font-bold">
            <a class="opacity-20 hover:opacity-60" href="#navbar-with-search-input-and-dropdown">#</a>
            <span class="component-preview-title">Navbar with search input and dropdown</span>
          </div>
          <div class="grid">
            <div class="tabs z-10 -mb-px">
              <button class="tab tab-lifted tab-active [--tab-bg:hsl(var(--b2))]">
                Preview
              </button>
              <button class="tab tab-lifted [--tab-border-color:transparent]">
                HTML
              </button>
              <button class="tab tab-lifted [--tab-border-color:transparent]">
                JSX
              </button>
              <div class="
                  tab tab-lifted
                  mr-6
                  flex-1
                  cursor-default
                  [--tab-border-color:transparent]
                "></div>
            </div>
            <div class="
                bg-base-300
                rounded-b-box rounded-tr-box
                relative
                overflow-x-auto
              ">
              <div class="
                  preview
                  border-base-300
                  bg-base-200
                  rounded-b-box rounded-tr-box
                  flex
                  min-h-[6rem] min-w-[18rem]
                  max-w-4xl
                  flex-wrap
                  items-center
                  justify-center
                  gap-2
                  overflow-x-hidden
                  border
                  bg-cover bg-top
                  p-4
                  undefined
                " style="background-size: 5px 5px">
                <div class="navbar bg-base-100 mb-32 shadow-xl rounded-box">
                  <div class="flex-1">
                    <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
                  </div>
                  <div class="flex-none gap-2">
                    <div class="form-control">
                      <input type="text" placeholder="Search" class="input input-bordered" />
                    </div>
                    <div class="dropdown dropdown-end">
                      <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                          <img src="https://placeimg.com/80/80/people" />
                        </div>
                      </label>
                      <ul tabindex="0" class="
                          mt-3
                          p-2
                          shadow
                          menu menu-compact
                          dropdown-content
                          bg-base-100
                          rounded-box
                          w-52
                        ">
                        <li>
                          <a class="justify-between">Profile <span class="badge">New</span></a>
                        </li>
                        <li><a>Settings</a></li>
                        <li><a>Logout</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="component-preview not-prose text-base-content my-4 max-w-4xl"
          id="navbar-with-icon-indicator-and-dropdown">
          <div class="pb-2 text-sm font-bold">
            <a class="opacity-20 hover:opacity-60" href="#navbar-with-icon-indicator-and-dropdown">#</a>
            <span class="component-preview-title">Navbar with icon, indicator and dropdown</span>
          </div>
          <div class="grid">
            <div class="tabs z-10 -mb-px">
              <button class="tab tab-lifted tab-active [--tab-bg:hsl(var(--b2))]">
                Preview
              </button>
              <button class="tab tab-lifted [--tab-border-color:transparent]">
                HTML
              </button>
              <button class="tab tab-lifted [--tab-border-color:transparent]">
                JSX
              </button>
              <div class="
                  tab tab-lifted
                  mr-6
                  flex-1
                  cursor-default
                  [--tab-border-color:transparent]
                "></div>
            </div>
            <div class="
                bg-base-300
                rounded-b-box rounded-tr-box
                relative
                overflow-x-auto
              ">
              <div class="
                  preview
                  border-base-300
                  bg-base-200
                  rounded-b-box rounded-tr-box
                  flex
                  min-h-[6rem] min-w-[18rem]
                  max-w-4xl
                  flex-wrap
                  items-center
                  justify-center
                  gap-2
                  overflow-x-hidden
                  border
                  bg-cover bg-top
                  p-4
                  undefined
                " style="background-size: 5px 5px">
                <div class="navbar bg-base-100 mb-40 shadow-xl rounded-box">
                  <div class="flex-1">
                    <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
                  </div>
                  <div class="flex-none">
                    <div class="dropdown dropdown-end">
                      <label tabindex="0" class="btn btn-ghost btn-circle">
                        <div class="indicator">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                          </svg>
                          <span class="badge badge-sm indicator-item">8</span>
                        </div>
                      </label>
                      <div tabindex="0" class="
                          mt-3
                          card card-compact
                          w-52
                          dropdown-content
                          bg-base-100
                          shadow
                        ">
                        <div class="card-body">
                          <span class="font-bold text-lg">8 Items</span>
                          <span class="text-info">Subtotal: $999</span>
                          <div class="card-actions">
                            <button class="btn btn-primary btn-block">
                              View cart
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="dropdown dropdown-end">
                      <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                          <img src="https://placeimg.com/80/80/people" />
                        </div>
                      </label>
                      <ul tabindex="0" class="
                          mt-3
                          p-2
                          shadow
                          menu menu-compact
                          dropdown-content
                          bg-base-100
                          rounded-box
                          w-52
                        ">
                        <li>
                          <a class="justify-between">Profile <span class="badge">New</span></a>
                        </li>
                        <li><a>Settings</a></li>
                        <li><a>Logout</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="component-preview not-prose text-base-content my-4 max-w-4xl"
          id="navbar-with-dropdown-center-logo-and-icon">
          <div class="pb-2 text-sm font-bold">
            <a class="opacity-20 hover:opacity-60" href="#navbar-with-dropdown-center-logo-and-icon">#</a>
            <span class="component-preview-title">Navbar with dropdown, center logo and icon</span>
          </div>
          <div class="grid">
            <div class="tabs z-10 -mb-px">
              <button class="tab tab-lifted tab-active [--tab-bg:hsl(var(--b2))]">
                Preview
              </button>
              <button class="tab tab-lifted [--tab-border-color:transparent]">
                HTML
              </button>
              <button class="tab tab-lifted [--tab-border-color:transparent]">
                JSX
              </button>
              <div class="
                  tab tab-lifted
                  mr-6
                  flex-1
                  cursor-default
                  [--tab-border-color:transparent]
                "></div>
            </div>
            <div class="
                bg-base-300
                rounded-b-box rounded-tr-box
                relative
                overflow-x-auto
              ">
              <div class="
                  preview
                  border-base-300
                  bg-base-200
                  rounded-b-box rounded-tr-box
                  flex
                  min-h-[6rem] min-w-[18rem]
                  max-w-4xl
                  flex-wrap
                  items-center
                  justify-center
                  gap-2
                  overflow-x-hidden
                  border
                  bg-cover bg-top
                  p-4
                  undefined
                " style="background-size: 5px 5px">
                <div class="navbar bg-base-100 mb-40 shadow-xl rounded-box">
                  <div class="navbar-start">
                    <div class="dropdown">
                      <label tabindex="0" class="btn btn-ghost btn-circle"><svg xmlns="http://www.w3.org/2000/svg"
                          class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7"></path>
                        </svg></label>
                      <ul tabindex="0" class="
                          mt-3
                          p-2
                          shadow
                          menu menu-compact
                          dropdown-content
                          bg-base-100
                          rounded-box
                          w-52
                        ">
                        <li><a>Homepage</a></li>
                        <li><a>Portfolio</a></li>
                        <li><a>About</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="navbar-center">
                    <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
                  </div>
                  <div class="navbar-end">
                    <button class="btn btn-ghost btn-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                      </svg>
                    </button>
                    <button class="btn btn-ghost btn-circle">
                      <div class="indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                          stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                          </path>
                        </svg>
                        <span class="badge badge-xs badge-primary indicator-item"></span>
                      </div>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="component-preview not-prose text-base-content my-4 max-w-4xl"
          id="responsive-dropdown-menu-on-small-screen-center-menu-on-large-screen">
          <div class="pb-2 text-sm font-bold">
            <a class="opacity-20 hover:opacity-60"
              href="#responsive-dropdown-menu-on-small-screen-center-menu-on-large-screen">#</a>
            <span class="component-preview-title">responsive (dropdown menu on small screen, center menu on large
              screen)</span>
          </div>
          <div class="pb-2 text-xs opacity-70">
            Resize screen to see changes
          </div>
          <div class="grid">
            <div class="tabs z-10 -mb-px">
              <button class="tab tab-lifted tab-active [--tab-bg:hsl(var(--b2))]">
                Preview
              </button>
              <button class="tab tab-lifted [--tab-border-color:transparent]">
                HTML
              </button>
              <button class="tab tab-lifted [--tab-border-color:transparent]">
                JSX
              </button>
              <div class="
                  tab tab-lifted
                  mr-6
                  flex-1
                  cursor-default
                  [--tab-border-color:transparent]
                "></div>
            </div>
            <div class="
                bg-base-300
                rounded-b-box rounded-tr-box
                relative
                overflow-x-auto
              ">
              <div class="
                  preview
                  border-base-300
                  bg-base-200
                  rounded-b-box rounded-tr-box
                  flex
                  min-h-[6rem] min-w-[18rem]
                  max-w-4xl
                  flex-wrap
                  items-center
                  justify-center
                  gap-2
                  overflow-x-hidden
                  border
                  bg-cover bg-top
                  p-4
                  undefined
                " style="background-size: 5px 5px">
                <div class="navbar bg-base-100 mb-32 shadow-xl rounded-box">
                  <div class="navbar-start">
                    <div class="dropdown">
                      <label tabindex="0" class="btn btn-ghost lg:hidden"><svg xmlns="http://www.w3.org/2000/svg"
                          class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16"></path>
                        </svg></label>
                      <ul tabindex="0" class="
                          mt-3
                          p-2
                          shadow
                          menu menu-compact
                          dropdown-content
                          bg-base-100
                          rounded-box
                          w-52
                        ">
                        <li><a>Item 1</a></li>
                        <li tabindex="0">
                          <a class="justify-between">Parent
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24">
                              <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z"></path>
                            </svg></a>
                          <ul class="p-2 bg-base-100">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                          </ul>
                        </li>
                        <li><a>Item 3</a></li>
                      </ul>
                    </div>
                    <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
                  </div>
                  <div class="navbar-center hidden lg:flex">
                    <ul class="menu menu-horizontal p-0">
                      <li><a>Item 1</a></li>
                      <li tabindex="0">
                        <a>Parent
                          <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 24 24">
                            <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"></path>
                          </svg></a>
                        <ul class="p-2 bg-base-100">
                          <li><a>Submenu 1</a></li>
                          <li><a>Submenu 2</a></li>
                        </ul>
                      </li>
                      <li><a>Item 3</a></li>
                    </ul>
                  </div>
                  <div class="navbar-end"><a class="btn">Get started</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="component-preview not-prose text-base-content my-4 max-w-4xl" id="navbar-with-colors">
          <div class="pb-2 text-sm font-bold">
            <a class="opacity-20 hover:opacity-60" href="#navbar-with-colors">#</a>
            <span class="component-preview-title">Navbar with colors</span>
          </div>
          <div class="grid">
            <div class="tabs z-10 -mb-px">
              <button class="tab tab-lifted tab-active [--tab-bg:hsl(var(--b2))]">
                Preview
              </button>
              <button class="tab tab-lifted [--tab-border-color:transparent]">
                HTML
              </button>
              <button class="tab tab-lifted [--tab-border-color:transparent]">
                JSX
              </button>
              <div class="
                  tab tab-lifted
                  mr-6
                  flex-1
                  cursor-default
                  [--tab-border-color:transparent]
                "></div>
            </div>
            <div class="
                bg-base-300
                rounded-b-box rounded-tr-box
                relative
                overflow-x-auto
              ">
              <div class="
                  preview
                  border-base-300
                  bg-base-200
                  rounded-b-box rounded-tr-box
                  flex
                  min-h-[6rem] min-w-[18rem]
                  max-w-4xl
                  flex-wrap
                  items-center
                  justify-center
                  gap-2
                  overflow-x-hidden
                  border
                  bg-cover bg-top
                  p-4
                  undefined
                " style="background-size: 5px 5px">
                <div class="
                    navbar
                    bg-neutral
                    text-neutral-content
                    shadow-xl
                    rounded-box
                  ">
                  <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
                </div>
                <div class="navbar bg-base-300 shadow-xl rounded-box">
                  <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
                </div>
                <div class="
                    navbar
                    bg-primary
                    text-primary-content
                    shadow-xl
                    rounded-box
                  ">
                  <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
