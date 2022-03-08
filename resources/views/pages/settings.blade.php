<x-cms-layout>
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <h1 class="sr-only">Profile</h1>
        <!-- Main 3 column grid -->
        <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8">
            <!-- Left column -->
            <div class="grid grid-cols-1 gap-4 lg:col-span-2">
              <form action="#" method="POST">
                <div class="shadow sm:sm:overflow-hidden">
                    <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                        <div>
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Profile</h3>
                            <p class="mt-1 text-sm text-gray-500">This information will be displayed publicly so be
                                careful what you share.</p>
                        </div>

                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">
                                    Username
                                </label>
                                <div class="mt-1 shadow-sm flex">
                                    <span
                                        class="bg-gray-50 border border-r-0 border-gray-300 rounded-l-md px-3 inline-flex items-center text-gray-500 sm:text-sm">
                                        workcation.com/
                                    </span>
                                    <input type="text" name="username" id="username" autocomplete="username"
                                        class="focus:ring-indigo-500 focus:border-indigo-500 flex-grow block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                                </div>
                            </div>

                            <div class="col-span-3">
                                <label for="about" class="block text-sm font-medium text-gray-700">
                                    About
                                </label>
                                <div class="mt-1">
                                    <textarea id="about" name="about" rows="3"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                        placeholder="you@example.com"></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">
                                    Brief description for your profile. URLs are hyperlinked.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit"
                            class="bg-main border border-transparent shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
              </form>

              <form action="#" method="POST">
                  <div class="shadow sm:sm:overflow-hidden">
                      <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                          <div>
                              <h3 class="text-lg leading-6 font-medium text-gray-900">Personal Information</h3>
                              <p class="mt-1 text-sm text-gray-500">Use a permanent address where you can recieve
                                  mail.</p>
                          </div>

                          <div class="grid grid-cols-6 gap-6">
                              <div class="col-span-6 sm:col-span-3">
                                  <label for="first-name" class="block text-sm font-medium text-gray-700">First
                                      name</label>
                                  <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                      class="mt-1 block w-full border border-gray-300 shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                              </div>

                              <div class="col-span-6 sm:col-span-3">
                                  <label for="last-name" class="block text-sm font-medium text-gray-700">Last
                                      name</label>
                                  <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                      class="mt-1 block w-full border border-gray-300 shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                              </div>

                              <div class="col-span-6 sm:col-span-4">
                                  <label for="email-address" class="block text-sm font-medium text-gray-700">Email
                                      address</label>
                                  <input type="text" name="email-address" id="email-address" autocomplete="email"
                                      class="mt-1 block w-full border border-gray-300 shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                              </div>

                              <div class="col-span-6 sm:col-span-3">
                                  <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                                  <select id="country" name="country" autocomplete="country-name"
                                      class="mt-1 block w-full bg-white border border-gray-300 shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                      <option>United States</option>
                                      <option>Canada</option>
                                      <option>Mexico</option>
                                  </select>
                              </div>

                              <div class="col-span-6">
                                  <label for="street-address" class="block text-sm font-medium text-gray-700">Street
                                      address</label>
                                  <input type="text" name="street-address" id="street-address"
                                      autocomplete="street-address"
                                      class="mt-1 block w-full border border-gray-300 shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                              </div>

                              <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                  <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                  <input type="text" name="city" id="city" autocomplete="address-level2"
                                      class="mt-1 block w-full border border-gray-300 shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                              </div>

                              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                  <label for="region" class="block text-sm font-medium text-gray-700">State /
                                      Province</label>
                                  <input type="text" name="region" id="region" autocomplete="address-level1"
                                      class="mt-1 block w-full border border-gray-300 shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                              </div>

                              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                  <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP /
                                      Postal code</label>
                                  <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code"
                                      class="mt-1 block w-full border border-gray-300 shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                              </div>
                          </div>
                      </div>
                      <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                          <button type="submit"
                              class="bg-main border border-transparent shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                              Save
                          </button>
                      </div>
                  </div>
              </form>

            </div>

            <!-- Right column -->
            <div class="grid grid-cols-1 gap-4">

              <form action="#" method="POST">
                <div class="shadow sm:sm:overflow-hidden">
                  <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                    <div>
                      <h3 class="text-lg leading-6 font-medium text-gray-900">Notifications</h3>
                      <p class="mt-1 text-sm text-gray-500">Provide basic informtion about the job. Be specific with the job title.</p>
                    </div>

                    <fieldset>
                      <legend class="text-base font-medium text-gray-900">By Email</legend>
                      <div class="mt-4 space-y-4">
                        <div class="flex items-start">
                          <div class="h-5 flex items-center">
                            <input id="comments" name="comments" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                          </div>
                          <div class="ml-3 text-sm">
                            <label for="comments" class="font-medium text-gray-700">Comments</label>
                            <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p>
                          </div>
                        </div>
                        <div>
                          <div class="flex items-start">
                            <div class="h-5 flex items-center">
                              <input id="candidates" name="candidates" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                              <label for="candidates" class="font-medium text-gray-700">Candidates</label>
                              <p class="text-gray-500">Get notified when a candidate applies for a job.</p>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="flex items-start">
                            <div class="h-5 flex items-center">
                              <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                              <label for="offers" class="font-medium text-gray-700">Offers</label>
                              <p class="text-gray-500">Get notified when a candidate accepts or rejects an offer.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset class="mt-6">
                      <legend class="text-base font-medium text-gray-900">Push Notifications</legend>
                      <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.</p>
                      <div class="mt-4 space-y-4">
                        <div class="flex items-center">
                          <input id="push-everything" name="push-notifications" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                          <label for="push-everything" class="ml-3">
                            <span class="block text-sm font-medium text-gray-700">Everything</span>
                          </label>
                        </div>
                        <div class="flex items-center">
                          <input id="push-email" name="push-notifications" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                          <label for="push-email" class="ml-3">
                            <span class="block text-sm font-medium text-gray-700">Same as email</span>
                          </label>
                        </div>
                        <div class="flex items-center">
                          <input id="push-nothing" name="push-notifications" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                          <label for="push-nothing" class="ml-3">
                            <span class="block text-sm font-medium text-gray-700">No push notifications</span>
                          </label>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                  <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="bg-main border border-transparent shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                      Save
                    </button>
                  </div>
                </div>
              </form>

            </div>
        </div>
    </div>
</x-cms-layout>