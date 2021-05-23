<div class="container1">
    @if (Session::has('message'))

        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <form action="" wire:submit.prevent="res">


        <label for="">Residence Name</label>

        <input type="text" placeholder="Residence Name" wire:model="name">

        @error('name') <span class="danger">{{ $message }}</span> @enderror
        <br>
        <label for="">Location </label>

        <input type="text" placeholder="Location" wire:model="loc">
        @error('loc') <span class="danger">{{ $message }}</span> @enderror
        <br>

        <label for="">Max Occupants</label>

        <input type="number" placeholder="Max Occupants" wire:model="acc">
        @error('acc') <span class="danger">{{ $message }}</span> @enderror
        <br>
        <label for="">Details</label>

        <textarea cols="30" rows="10" wire:model="details" placeholder="Details"></textarea>
        @error('details') <span class="danger">{{ $message }}</span> @enderror
        <br>


        <label for="">Price</label>

        <input type="number" placeholder="Price" wire:model="price">
        @error('price') <span class="danger">{{ $message }}</span> @enderror
        <br>

        <label for="">Size</label>

        <input type="number" placeholder="Size" wire:model="size">
        @error('size') <span class="danger">{{ $message }}</span> @enderror
        <br>



        <label for="">Product Image</label>

        <input type="file" class="input-file" placeholder="Product Image" wire:model="image" />
        @if ($image)
            <img src="{{ $image->temporaryUrl() }}" width="120" alt="">

        @endif

        @error('image') <span class="danger">{{ $message }}</span> @enderror
        <br>


        <label for="">Category</label>

        <select wire:model="category_id">
            <option value="">Select Category</option>
            @foreach ($cats as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach

        </select>


        @error('category_id') <span class="danger">{{ $message }}</span> @enderror
        <br>

        <label for=""></label>

        <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>


    </form>

</div>
