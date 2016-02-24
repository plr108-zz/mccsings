var viewModel = {
    homeVisible: ko.observable(true),
    contactVisible: ko.observable(false),
    aboutVisible: ko.observable(false),

    showHome: function() {
        viewModel.homeVisible(true);
        viewModel.contactVisible(false);
        viewModel.aboutVisible(false);
    },

    showContact: function() {
        viewModel.homeVisible(false);
        viewModel.contactVisible(true);
        viewModel.aboutVisible(false);
    },

    showAbout: function() {
        viewModel.homeVisible(false);
        viewModel.contactVisible(false);
        viewModel.aboutVisible(true);
    }
};

// activate Knockout
ko.applyBindings(viewModel);
