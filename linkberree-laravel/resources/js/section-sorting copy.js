import Sortable from 'sortablejs';

document.addEventListener("DOMContentLoaded", function() {
    var sortable = new Sortable(document.getElementById('sortable-sections'), {
        animation: 150,
        handle: '.text-xl', // Using the title of each card as the handle
        onUpdate: function (evt) {
            var sections = evt.from.children;
            var orderUpdates = [];

            for (var i = 0; i < sections.length; i++) {
                var sectionId = sections[i].getAttribute('data-section-id');
                orderUpdates.push({
                    id: sectionId,
                    newOrder: i + 1 // Start order from 1
                });

                // Reflect the new order in the DOM immediately
                let orderElement = sections[i].querySelector('.section-order');
                orderElement.textContent = i + 1;
            }

            // Send the orderUpdates array to the server using Fetch
            fetch('/update-section-order', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ orderUpdates: orderUpdates })
            })
            .then(response => response.json())
            .then(data => {
                console.log(data.message);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    });
});