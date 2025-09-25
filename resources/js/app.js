import './bootstrap';

// Auto-refresh script for development
if (import.meta.env.DEV) {
    // Check for changes every 2 seconds
    setInterval(async () => {
        try {
            const response = await fetch('/api/check-changes', {
                method: 'GET',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                }
            });

            if (response.ok) {
                const data = await response.json();
                if (data.hasChanges) {
                    window.location.reload();
                }
            }
        } catch (error) {
            // Silently fail - this is just for development
        }
    }, 2000);
}
