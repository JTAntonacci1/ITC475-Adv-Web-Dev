ReactDOM.render(
    React.createElement("form", { id: 'adminForm', method: 'POST', action: 'admin.php' },
        React.createElement('input', { className: 'button', type: 'submit' })),
    document.getElementById('admins'));
