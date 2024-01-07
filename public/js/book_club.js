document.addEventListener('DOMContentLoaded', function() {
    // create selling club outer container 
    const createSellingClubOuterCtn = document.getElementById('createSellingClubOuterCtn');

    console.log('hello book club');
    
    console.log(current_user_id);

    // book selling club member checker
    async function sellingClubMemberChecker() {
        try {
            const checker = await fetch(`/sellingClubMemberChecker?currentUserId=${current_user_id}`);
            const response = await checker.json();

            if (response.data) {
                console.log(response.data);
            } else {
                console.log('may problema tol');
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
                header: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrf_token,
                }, 
                body: JSON.stringify({
                    'user_id': 3
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
    addModerators();

});
