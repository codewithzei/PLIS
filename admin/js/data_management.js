// js/data_management.js

document.addEventListener('DOMContentLoaded', function() {
    const dropdownButton = document.querySelector('.dropdown-button');
    const dropdownContent = document.querySelector('.dropdown-content');
    const dropdownLinks = dropdownContent.querySelectorAll('a');
    const contentSections = document.querySelectorAll('.document-updates');
    const subheaderTitle = document.querySelector('.subheader-left h2'); // Assuming this is the main title
    const mainTitle = document.querySelector('.document-updates .title-and-search-container.title h2');
    const mainDescription = document.querySelector('.document-updates .title-and-search-container.title p');

    // Function to hide all content sections
    function hideAllContentSections() {
        contentSections.forEach(section => {
            section.style.display = 'none';
        });
    }

    // Function to update the main title and description
    function updateMainHeader(title, description) {
        // subheaderTitle.textContent = title; // If you want to change the subheader title as well
        // mainTitle.textContent = title; // This will be handled by showing the correct section
        // mainDescription.textContent = description; // This will be handled by showing the correct section
    }

    // Add click event listener to each dropdown link
    dropdownLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior (e.g., jumping to #anchor)

            const targetId = this.dataset.target; // Get the target ID from data-target attribute
            const selectedText = this.textContent; // Get the text of the clicked link

            // Update the dropdown button text
            dropdownButton.innerHTML = selectedText + ' <span class="arrow">▼</span>';

            // Hide all content sections
            hideAllContentSections();

            // Show the targeted content section
            const targetSection = document.getElementById(targetId);
            if (targetSection) {
                targetSection.style.display = 'flex'; // Use 'flex' as per your CSS for .document-updates
                
                // Update the main title and description based on the selected section
                const sectionMainTitle = targetSection.querySelector('.title-and-search-container.title h2');
                const sectionMainDescription = targetSection.querySelector('.title-and-search-container.title p');
                if (sectionMainTitle && sectionMainDescription) {
                    // You might want to update the subheader title here if it's dynamic
                    // subheaderTitle.textContent = sectionMainTitle.textContent; 
                }
            }

            // Close the dropdown after selection (optional, but good UX)
            dropdownContent.style.display = 'none';
        });
    });

    // Toggle dropdown visibility when the button is clicked
    dropdownButton.addEventListener('click', function() {
        if (dropdownContent.style.display === 'block') {
            dropdownContent.style.display = 'none';
        } else {
            dropdownContent.style.display = 'block';
        }
    });

    // Close the dropdown if the user clicks outside of it
    window.addEventListener('click', function(event) {
        if (!dropdownButton.contains(event.target) && !dropdownContent.contains(event.target)) {
            dropdownContent.style.display = 'none';
        }
    });

    // Initial setup: Ensure only the first section is visible on page load
    hideAllContentSections();
    const defaultSection = document.getElementById('document-types');
    if (defaultSection) {
        defaultSection.style.display = 'flex';
        dropdownButton.innerHTML = 'Document Types <span class="arrow">▼</span>'; // Set initial button text
    }
});
