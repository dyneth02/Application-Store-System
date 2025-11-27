document.getElementById('feedbackForm').addEventListener('submit', function (e) {
    e.preventDefault();
    
    const name = document.getElementById('name').value;
    const feedback = document.getElementById('feedback').value;

    // Create feedback item
    const feedbackItem = document.createElement('div');
    feedbackItem.classList.add('feedback-item');
    
    feedbackItem.innerHTML = `
        <h3>${name}</h3>
        <p>${feedback}</p>
        <button class="edit-btn">Edit</button>
        <button class="delete-btn">Delete</button>
    `;
    
    document.getElementById('feedbackList').appendChild(feedbackItem);
    
    // Clear the form after submitting
    document.getElementById('name').value = '';
    document.getElementById('feedback').value = '';
    
    // Add edit functionality
    feedbackItem.querySelector('.edit-btn').addEventListener('click', function () {
        const editedName = prompt('Edit your name:', name);
        const editedFeedback = prompt('Edit your feedback:', feedback);
        
        if (editedName && editedFeedback) {
            feedbackItem.querySelector('h3').textContent = editedName;
            feedbackItem.querySelector('p').textContent = editedFeedback;
        }
    });

    // Add delete functionality
    feedbackItem.querySelector('.delete-btn').addEventListener('click', function () {
        feedbackItem.remove();
    });
});