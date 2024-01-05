document.addEventListener('DOMContentLoaded', function() {
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

    // if mayda admin tas macreate pala hiya an club for instsance ha selling club
    async function createBookSellingClub() {
        const clubName = 'Book Selling Club';
        const sellingClubModerators = current_user_id;
        const sellingClubMembers = current_user_id; 
        try {
            const maker = await fetch('/createBookSellingClub', {
                method: 'POST', 
                headers: { 
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrf_token, 
                }, 
                body: JSON.stringify({
                    'bookClubName': clubName,
                    'sellingClubModerators': sellingClubModerators,
                    'sellingClubMembers': sellingClubMembers
                })
            });
            const response = await maker.json();

            if (response) {
                console.log('ada');
            } 
            console.log('hghfh');
        } catch(e) {
            console.log(e);
        }
    }

    // add event para ma invoke 
    createBookSellingClub();

});
