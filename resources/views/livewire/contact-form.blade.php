<div>
    <form wire:submit.prevent="submit">
    	<div class="form-group">
    		<label for="exampleInputName">Name</label>
    		<input type="text" class="form-control" id="exampleInputName" placeholder="Enter name" wire:model="name">
    		@error('name')
    			<span class="text-danger">{{ $message}}</span>
    		@enderror
    	</div>

    	<div class="form-group">
    		<label for="exampleInputEmail">Email</label>
    		<input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter email" wire:model="email">
    		@error('email')
    			<span class="text-danger">{{ $message}}</span>
    		@enderror
    	</div>

    	<div class="form-group">
    		<label for="exampleInputbody">Body</label>
    		<textarea id="exampleInputbody"  class="form-control" placeholder="Enter Body" wire:model="body"></textarea>
    		@error('body')
    			<span class="text-danger">{{ $message }}</span>
    		@enderror
    	</div>
    	<button type="submit">Save</button>
    </form>
</div>
