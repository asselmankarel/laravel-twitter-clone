<form action="tweets" method="POST">
  @csrf
  <textarea name="body" class="w-full" placeholder="What's up doc?"></textarea>
  <hr class="my-2">
  <footer class="flex justify-between">
    <img src="https://i.pravatar.cc/40" alt="" class="rounded-full mr-3">
    <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">tweet-a-roo!</button>
  </footer>
</form>

@error('body')
  <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
@enderror