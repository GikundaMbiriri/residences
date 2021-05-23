<div class="container1">
    @if (Session::has('message'))

        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <form action="" wire:submit.prevent="sendmail">

        <label for="name">First Name</label>
        <input type="text" id="name" wire:model="name" placeholder="Your name..">
        @error('name') <span class="danger">{{ $message }}</span> @enderror
        <br>
        <label for="email">Email</label>
        <input type="email" id="email" wire:model="email" placeholder="email">
        @error('email') <span class="danger">{{ $message }}</span> @enderror
        <br>
        <label for="phone">Phone</label>
        <input type="tel" id="phone" wire:model="phone" placeholder="phone">
        @error('phone') <span class="danger">{{ $message }}</span> @enderror
        <br>


        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." wire:model="msg"
            style="height:200px"></textarea>
        @error('msg') <span class="danger">{{ $message }}</span> @enderror
        <br>
        <input type="submit" value="Submit">

    </form>
</div>
