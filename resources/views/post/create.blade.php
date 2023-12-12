<x-app-layout>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <form action="{{ route('posts.store') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <p>Title</p>
                        <x-input type="text" name="title" />
                    </div>
                    <div class="mb-3">
                        <p>Body</p>
                        <textarea name="body" cols="30" rows="10"
                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                    </div>
                    <div class="mb-3">
                        <x-button>Save</x-button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</x-app-layout>
