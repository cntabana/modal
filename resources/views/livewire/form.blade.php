<div>
		<x-modal>
			<x-slot name="title">
				Create Identification
			</x-slot>

			<x-slot name="content">Hello
                <x-input.date />
			</x-slot>

			<x-slot name="buttons">
				<button wire:click="$emit('closeModal')" class="mr-2">Close</button>
			</x-slot>
		</x-modal>
</div>
