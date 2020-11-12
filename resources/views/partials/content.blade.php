<table class="data-table">
	<tbody tabindex="0">
		@foreach ($items as $item)
			<tr class="sortable-row outline-none">
				<td>
					<div class="flex items-center">
						<div class="little-dot mr-1 bg-green"></div>
						<a class="text-sm" href="{{ $item->get_permalink() }}" target="_blank">
							{{ $item->get_title() }}
						</a>
					</div>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
