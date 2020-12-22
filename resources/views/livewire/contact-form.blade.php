<div>
    <form wire:submit.prevent="submit">
        <div class="justify-center">
        	<div class="">
        		<label for="exampleInputName" class="block">Name</label>
        		<input type="text" class="rounded" id="exampleInputName" placeholder="Enter name" wire:model="name">
        		@error('name')
        			<span class="text-danger">{{ $message}}</span>
        		@enderror
        	</div>

        	<div class="form-group">
        		<label for="exampleInputEmail" class="block">Email</label>
        		<input type="text" class="rounded" id="exampleInputEmail" placeholder="Enter email" wire:model="email">
        		@error('email')
        			<span class="text-danger">{{ $message}}</span>
        		@enderror
        	</div>

        	<div class="form-group">
        		<label for="exampleInputbody" class="block">Body</label>
        		<textarea id="exampleInputbody"  class="rounded" placeholder="Enter Body" wire:model="body"></textarea>
        		@error('body')
        			<span class="text-danger">{{ $message }}</span>
        		@enderror
        	</div>
        	<button type="submit">Save</button>
        </div>
    </form>
</div>
