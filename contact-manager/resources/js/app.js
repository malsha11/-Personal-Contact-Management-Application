// Function to fetch and display contacts
function getContacts() {
    fetch('http://localhost:8000/api/contacts')
        .then(response => response.json())
        .then(contacts => {
            const contactsList = document.getElementById('contacts-list');
            contactsList.innerHTML = '';
            contacts.forEach(contact => {
                const contactItem = document.createElement('div');
                contactItem.innerHTML = `
                    <h3>${contact.name}</h3>
                    <p>Email: ${contact.email}</p>
                    <p>Phone: ${contact.phone_number}</p>
                    <p>Note: ${contact.note}</p>
                `;
                contactsList.appendChild(contactItem);
            });
        })
        .catch(error => console.error('Error:', error));
}

// Function to add a new contact
function addContact(event) {
    event.preventDefault();
    const formData = new FormData(event.target);
    fetch('http://localhost:8000/api/contacts', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(Object.fromEntries(formData))
    })
    .then(response => {
        if (response.ok) {
            alert('Contact added successfully');
            event.target.reset();
            getContacts();
        } else {
            throw new Error('Failed to add contact');
        }
    })
    .catch(error => console.error('Error:', error));
}

// Event listener to call getContacts function when the page loads
window.onload = () => {
    getContacts();
};

// Event listener to call addContact function when the add contact form is submitted
document.getElementById('add-contact-form').addEventListener('submit', addContact);
