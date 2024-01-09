// Book club selling club 
document.addEventListener('DOMContentLoaded', function() {
    // create selling club outer container 
    const createSellingClubOuterCtn = document.getElementById('createSellingClubOuterCtn');

    // book club name
    const current_bookClub_name = 'Book Selling Club';

    // console.log(current_user_id);

    // book selling club member checker
    async function sellingClubMemberChecker() {
        try {
            const checker = await fetch(`/sellingClubMemberChecker?currentUserId=${current_user_id}`);
            const response = await checker.json();

            if (response.data) {
                console.log(response.data);
            } else {
                console.log(response.error);

                const joinClubButton = document.createElement('div');
                joinClubButton.textContent = 'Join Book Selling Club';
                joinClubButton.id = 'jonClubButton';

                // temporary container para ha join club btn
                createSellingClubOuterCtn.appendChild(joinClubButton);

                // event listener
                joinClubButton.addEventListener('click', async () => {
                    // join request
                    const joinRequest = await fetch('/joinRequest', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrf_token,
                        },
                        body: JSON.stringify({
                            'currentUserId': current_user_id,
                            'currentBookClubName': current_bookClub_name,
                            'requestStatus': 'pending'      
                        })
                    });
                    const response = await joinRequest.json();

                    if (response.data) {
                        console.log(response.data);
                    } else {
                        console.log(response.error);
                    }
                });

            }
        } catch(e) {
            console.log(e);
        }
    }

    sellingClubMemberChecker();

    async function adminChecker() {
        try {
            const checker = await fetch(`/adminChecker?currentUserId=${current_user_id}`, {
                method: 'GET',
            });
            const response = await checker.json();

            if (response.data) {
                // creation an create club button
                const createSellingClub = document.createElement('div');
                createSellingClub.id = 'createSellingClub';
                createSellingClub.textContent = 'Create Selling Club';

                createSellingClubOuterCtn.appendChild(createSellingClub);
            
                // if mayda admin tas macreate pala hiya an club for instsance ha selling club
                document.getElementById('createSellingClub').addEventListener('click', function() {
                    async function createBookSellingClub() {
                        const clubName = 'Book Selling Club';
                        try {
                            const maker = await fetch('/createBookSellingClub', {
                                method: 'POST', 
                                headers: { 
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': csrf_token, 
                                }, 
                                body: JSON.stringify({
                                    'bookClubName': clubName,
                                })
                            });
                            const response = await maker.json();
                
                            if (response.data) {
                                console.log(response.data);
                            } else {
                                console.log(response.error);
                            }
                
                        } catch(e) {
                            console.log(e);
                        }
                    }
                    createBookSellingClub();
                });
            } else {
                console.log(response.error);
            }
        } catch(e) {
            console.log(e);
        }
    }
    
    adminChecker();

    // adding moderators
    async function addModerators() {
        try {
            const adder = await fetch('/addModerators', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrf_token,
                }, 
                body: JSON.stringify({
                    'club_name': 'Book Selling Club',
                    'user_id': 2
                })
            });

            const response = await adder.json();
            
            if (response.data) {
                console.log(response.data);
            } else {
                console.log(response.error);
            }
        } catch (e) {
            console.log(e);
        }   
    }

    // for testing, pero dapat naka event listener ini 
    // addModerators();

    // moderator checker
    async function moderatorChecker() {
        const checker = await fetch(`/moderatorChecker?currentUserId=${current_user_id}`, {
            method: 'GET'
        });
        const response = await checker.json();

        if (response.data) {
            console.log('Current user is a moderator');

            // display if moderator
            
        } else {
            console.log('Current user is not a moderator');
        }
    }

    moderatorChecker();
    
    // adding members 
    async function addMembers() {
        const adder = await fetch('/addMembers', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrf_token,
            }, 
            body: JSON.stringify({
                'club_name': 'Book Selling Club',
                // user id temporary, dapat pwedi ha search based ma kuha hin value or request based
                'user_id': 1
            })
        });
        const response = await adder.json();
        
        if (response.data) {
            console.log('New member added');
        } else {
            console.log('Cant add new member');
        }
    }
    
    // invoke pero dapat ha ma refer ini ha event handler
    // addMembers();
    
});
