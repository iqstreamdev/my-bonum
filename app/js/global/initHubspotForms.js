export const initHubspotForms = () => {
    const formWrapper = document.querySelectorAll('.hs-form-wrapper');
    if (!formWrapper) return;

    formWrapper.forEach(wrapper => {
        const formId = wrapper.getAttribute('data-form-id');
        const portalId = wrapper.getAttribute('data-portal-id');
        const region = wrapper.getAttribute('data-region');

        hbspt.forms.create({
            portalId: formId,
            formId: portalId,
            region: region,
            onFormReady: function (form) {
                wrapper.appendChild(form);
            }
        });
    });
}