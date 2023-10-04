import Sortable from 'sortablejs';

document.addEventListener("DOMContentLoaded", function() {
    var sortable = new Sortable(document.getElementById('sortable-sections'), {
        animation: 150,
        handle: '.text-xl',
        onUpdate: function(evt) {
            var sections = evt.from.children;
            var orderUpdates = [];

            for (var i = 0; i < sections.length; i++) {
                var sectionId = sections[i].getAttribute('data-section-id');
                orderUpdates.push({
                    id: sectionId,
                    newOrder: i + 1
                });

                let orderElement = sections[i].querySelector('.section-order');
                orderElement.textContent = i + 1;
            }

            // Instead of emitting a Livewire event, dispatch a custom browser event
            window.dispatchEvent(new CustomEvent('sectionsSorted', {
                detail: orderUpdates
            }));
        }
    });
});
