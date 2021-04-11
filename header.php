<div class="menu_button" onclick="openMenu()">
    <div></div>
    <div></div>
    <div></div>
</div>
<header>
    <div class="logo">
        <a href="main.php">Ontino</a>
    </div>
    <menu>
        <a <?php echo ($page == 'main') ? 'class="active_page menu_li"' : 'class="menu_li"'?>
                href="index.php?page=main">Главная</a>
        <a href="menu.pdf" class="menu_li">Меню</a>
        <a <?php echo ($page == 'shop') ? 'class="active_page menu_li"' : 'class="menu_li"'?>
                href="index.php?page=shop">Магазин</a>
        <a <?php echo ($page == 'contact') ? 'class="active_page menu_li"' : 'class="menu_li"'?>
                href="index.php?page=contact">Контакты</a>
    </menu>
    <div class="headIcons">
        <a href="#" class="facebook icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12.067C0 18.033 4.333 22.994 10 24V15.333H7V12H10V9.333C10 6.333 11.933 4.667 14.667 4.667C15.533 4.667 16.467 4.8 17.333 4.933V8H15.8C14.333 8 14 8.733 14 9.667V12H17.2L16.667 15.333H14V24C19.667 22.994 24 18.034 24 12.067C24 5.43 18.6 0 12 0C5.4 0 0 5.43 0 12.067Z" fill="#FAFAFF"/>
            </svg>

        </a>
        <a href="#" class="instagram icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.05273 0.072C8.33236 0.0130909 8.74036 0 12 0C15.2596 0 15.6676 0.0141818 16.9462 0.072C18.2247 0.129818 19.0975 0.333818 19.8611 0.629455C20.6607 0.931636 21.3862 1.404 21.9862 2.01491C22.5971 2.61382 23.0684 3.33818 23.3695 4.13891C23.6662 4.90255 23.8691 5.77527 23.928 7.05164C23.9869 8.33345 24 8.74145 24 12C24 15.2596 23.9858 15.6676 23.928 16.9473C23.8702 18.2236 23.6662 19.0964 23.3695 19.86C23.0684 20.6608 22.5963 21.3864 21.9862 21.9862C21.3862 22.5971 20.6607 23.0684 19.8611 23.3695C19.0975 23.6662 18.2247 23.8691 16.9484 23.928C15.6676 23.9869 15.2596 24 12 24C8.74036 24 8.33236 23.9858 7.05273 23.928C5.77636 23.8702 4.90364 23.6662 4.14 23.3695C3.33919 23.0683 2.61362 22.5963 2.01382 21.9862C1.40332 21.3869 0.930889 20.6617 0.629455 19.8611C0.333818 19.0975 0.130909 18.2247 0.072 16.9484C0.0130909 15.6665 0 15.2585 0 12C0 8.74036 0.0141818 8.33236 0.072 7.05382C0.129818 5.77527 0.333818 4.90255 0.629455 4.13891C0.931334 3.33827 1.40413 2.61307 2.01491 2.01382C2.61386 1.40346 3.3387 0.931029 4.13891 0.629455C4.90255 0.333818 5.77527 0.130909 7.05164 0.072H7.05273ZM16.8491 2.232C15.5836 2.17418 15.204 2.16218 12 2.16218C8.796 2.16218 8.41636 2.17418 7.15091 2.232C5.98036 2.28545 5.34545 2.48073 4.92218 2.64545C4.36255 2.86364 3.96218 3.12218 3.54218 3.54218C3.14405 3.92951 2.83765 4.40104 2.64545 4.92218C2.48073 5.34545 2.28545 5.98036 2.232 7.15091C2.17418 8.41636 2.16218 8.796 2.16218 12C2.16218 15.204 2.17418 15.5836 2.232 16.8491C2.28545 18.0196 2.48073 18.6545 2.64545 19.0778C2.83745 19.5982 3.144 20.0705 3.54218 20.4578C3.92945 20.856 4.40182 21.1625 4.92218 21.3545C5.34545 21.5193 5.98036 21.7145 7.15091 21.768C8.41636 21.8258 8.79491 21.8378 12 21.8378C15.2051 21.8378 15.5836 21.8258 16.8491 21.768C18.0196 21.7145 18.6545 21.5193 19.0778 21.3545C19.6375 21.1364 20.0378 20.8778 20.4578 20.4578C20.856 20.0705 21.1625 19.5982 21.3545 19.0778C21.5193 18.6545 21.7145 18.0196 21.768 16.8491C21.8258 15.5836 21.8378 15.204 21.8378 12C21.8378 8.796 21.8258 8.41636 21.768 7.15091C21.7145 5.98036 21.5193 5.34545 21.3545 4.92218C21.1364 4.36255 20.8778 3.96218 20.4578 3.54218C20.0705 3.14408 19.5989 2.83768 19.0778 2.64545C18.6545 2.48073 18.0196 2.28545 16.8491 2.232ZM10.4673 15.6993C11.3233 16.0556 12.2764 16.1037 13.1639 15.8353C14.0514 15.567 14.8182 14.9988 15.3334 14.2279C15.8485 13.457 16.0801 12.5311 15.9884 11.6085C15.8968 10.6858 15.4876 9.82361 14.8309 9.16909C14.4123 8.7507 13.9061 8.43034 13.3487 8.23107C12.7914 8.0318 12.1968 7.95858 11.6078 8.01667C11.0188 8.07477 10.45 8.26274 9.94233 8.56705C9.43468 8.87136 9.00081 9.28445 8.67197 9.77657C8.34312 10.2687 8.12748 10.8276 8.04056 11.413C7.95365 11.9985 7.99762 12.596 8.16932 13.1624C8.34101 13.7288 8.63616 14.2501 9.03351 14.6888C9.43087 15.1275 9.92054 15.4726 10.4673 15.6993ZM7.63855 7.63855C8.2113 7.06579 8.89126 6.61146 9.6396 6.30149C10.3879 5.99151 11.19 5.83197 12 5.83197C12.81 5.83197 13.6121 5.99151 14.3604 6.30149C15.1087 6.61146 15.7887 7.06579 16.3615 7.63855C16.9342 8.2113 17.3885 8.89126 17.6985 9.6396C18.0085 10.3879 18.168 11.19 18.168 12C18.168 12.81 18.0085 13.6121 17.6985 14.3604C17.3885 15.1087 16.9342 15.7887 16.3615 16.3615C15.2047 17.5182 13.6359 18.168 12 18.168C10.3641 18.168 8.79528 17.5182 7.63855 16.3615C6.48182 15.2047 5.83197 13.6359 5.83197 12C5.83197 10.3641 6.48182 8.79528 7.63855 7.63855ZM19.536 6.75055C19.6779 6.61666 19.7916 6.45565 19.8701 6.27706C19.9487 6.09847 19.9907 5.90593 19.9935 5.71083C19.9964 5.51574 19.9601 5.32205 19.8867 5.14125C19.8134 4.96044 19.7045 4.79619 19.5665 4.65822C19.4285 4.52026 19.2643 4.41137 19.0835 4.33802C18.9027 4.26467 18.709 4.22834 18.5139 4.23118C18.3188 4.23403 18.1263 4.27599 17.9477 4.35458C17.7691 4.43317 17.6081 4.5468 17.4742 4.68873C17.2138 4.96476 17.0712 5.33141 17.0768 5.71083C17.0823 6.09026 17.2355 6.4526 17.5038 6.72092C17.7721 6.98924 18.1345 7.14243 18.5139 7.14796C18.8933 7.15349 19.26 7.01093 19.536 6.75055Z" fill="#FAFAFF"/>
            </svg>

        </a>
        <a href="card.php" class="card icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.9476 18.9474C19.6176 18.9474 20.2602 19.2135 20.7339 19.6873C21.2077 20.1611 21.4739 20.8037 21.4739 21.4737C21.4739 22.1437 21.2077 22.7863 20.7339 23.2601C20.2602 23.7338 19.6176 24 18.9476 24C18.2775 24 17.6349 23.7338 17.1612 23.2601C16.6874 22.7863 16.4212 22.1437 16.4212 21.4737C16.4212 20.8037 16.6874 20.1611 17.1612 19.6873C17.6349 19.2135 18.2775 18.9474 18.9476 18.9474ZM18.9476 20.2105C18.6125 20.2105 18.2913 20.3436 18.0544 20.5805C17.8175 20.8174 17.6844 21.1387 17.6844 21.4737C17.6844 21.8087 17.8175 22.13 18.0544 22.3669C18.2913 22.6038 18.6125 22.7368 18.9476 22.7368C19.2826 22.7368 19.6039 22.6038 19.8408 22.3669C20.0776 22.13 20.2107 21.8087 20.2107 21.4737C20.2107 21.1387 20.0776 20.8174 19.8408 20.5805C19.6039 20.3436 19.2826 20.2105 18.9476 20.2105ZM7.57902 18.9474C8.24905 18.9474 8.89163 19.2135 9.36542 19.6873C9.8392 20.1611 10.1054 20.8037 10.1054 21.4737C10.1054 22.1437 9.8392 22.7863 9.36542 23.2601C8.89163 23.7338 8.24905 24 7.57902 24C6.909 24 6.26641 23.7338 5.79263 23.2601C5.31885 22.7863 5.05268 22.1437 5.05268 21.4737C5.05268 20.8037 5.31885 20.1611 5.79263 19.6873C6.26641 19.2135 6.909 18.9474 7.57902 18.9474V18.9474ZM7.57902 20.2105C7.24401 20.2105 6.92272 20.3436 6.68583 20.5805C6.44894 20.8174 6.31585 21.1387 6.31585 21.4737C6.31585 21.8087 6.44894 22.13 6.68583 22.3669C6.92272 22.6038 7.24401 22.7368 7.57902 22.7368C7.91404 22.7368 8.23533 22.6038 8.47222 22.3669C8.70911 22.13 8.84219 21.8087 8.84219 21.4737C8.84219 21.1387 8.70911 20.8174 8.47222 20.5805C8.23533 20.3436 7.91404 20.2105 7.57902 20.2105ZM21.4739 3.78947H4.13436L7.35165 11.3684H17.6844C17.8808 11.3687 18.0746 11.3229 18.2501 11.2347C18.4256 11.1466 18.5779 11.0184 18.6949 10.8606L22.4844 5.808H22.4857C22.6258 5.62024 22.7109 5.39722 22.7315 5.16387C22.7522 4.93052 22.7075 4.69603 22.6025 4.4866C22.4975 4.27717 22.3364 4.10107 22.1371 3.97796C21.9378 3.85485 21.7082 3.78959 21.4739 3.78947V3.78947ZM17.6844 12.6316H7.40976L6.44217 14.6021L6.31585 15.1579C6.31585 15.4929 6.44894 15.8142 6.68583 16.0511C6.92272 16.288 7.24401 16.4211 7.57902 16.4211H21.4739V17.6842H7.57902C7.13914 17.6844 6.70683 17.5698 6.32486 17.3516C5.94289 17.1335 5.6245 16.8194 5.4012 16.4404C5.17789 16.0614 5.05741 15.6307 5.05167 15.1909C5.04593 14.751 5.15513 14.3173 5.36847 13.9326L6.27796 12.0707L1.69012 1.26316H0V0H2.52634L3.59877 2.52632H21.4739C21.9512 2.52636 22.4188 2.66163 22.8224 2.91645C23.226 3.17127 23.5491 3.53521 23.7544 3.96613C23.9597 4.39705 24.0387 4.8773 23.9823 5.35127C23.9259 5.82524 23.7363 6.27353 23.4356 6.64421L19.7547 11.5528C19.522 11.8861 19.2122 12.1582 18.8518 12.346C18.4913 12.5338 18.0908 12.6318 17.6844 12.6316V12.6316Z" fill="#FAFAFF"/>
            </svg>

        </a>
    </div>
</header>