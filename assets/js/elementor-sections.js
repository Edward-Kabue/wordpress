document.addEventListener('DOMContentLoaded', function() {
    console.log('Elementor sections script loaded');
    
    if (typeof elementor === 'undefined') {
        console.error('Elementor not found');
        return;
    }

    // Wait for Elementor to be ready
    elementor.on('preview:loaded', function() {
        console.log('Elementor preview loaded');
        
        if (typeof TwentyTwentyfiveSections === 'undefined' || !TwentyTwentyfiveSections.templates) {
            console.error('Templates data not found');
            return;
        }

        console.log('Available sections:', TwentyTwentyfiveSections.templates);

        // Add sections to the panel
        TwentyTwentyfiveSections.templates.forEach(function(section) {
            elementor.sections.addSection(section.title, {
                title: section.title,
                icon: 'eicon-custom',
                categories: [section.category],
                content: function() {
                    return fetch(section.path)
                        .then(response => response.text())
                        .then(content => {
                            return {
                                content: content,
                                title: section.title
                            };
                        })
                        .catch(error => {
                            console.error('Error loading template:', error);
                            return null;
                        });
                }
            });
        });
    });
});

