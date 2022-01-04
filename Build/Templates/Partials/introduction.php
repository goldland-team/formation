<h1 class="mb-20">Introduction</h1>
<h2 class="mb-20">What are content elements?</h2>
<p>
    Content elements (often abbreviated as CE) are the building blocks that make up a page in TYPO3.

    Content elements are stored in the database table tt_content. Each content element has a specific content element type, specified by the database field tt_content.CType. A content element can be of a type supplied by TYPO3, such as ‘textmedia’ (text with or without images or videos). Or it can have a custom type supplied by an extension such as ‘carousel’ provided by the bootstrap_package extension.

    <br> Content elements are one of the elements (along with pages) that can be filled with content by editors and will be rendered in the frontend when a page is generated.

    <br>Content elements are arranged on a page, depending on their
<ul>
    <li>language (field: tt_content.sys_language_uid)</li>
    <li>sorting (field: tt_content.sorting)</li>
    <li>column (field: tt_content.colPos)</li>
    <li>etc.</li>
</ul>
</p>
<h2 class="mb-20">What are plugins?</h2>
<p>
    Plugins are a specific type of content elements. Typical characteristics of plugins are:
<ul>
    <li>Used if more complex functionality is required</li>
    <li>Plugins can be created using the Extbase framework or as pibase (AbstractPlugin) plugin.</li>
    <li>tt_content.CType = list and tt_content.list_type contains the plugin signature.</li>

</ul>
A typical extension with plugins is the ‘news’ extension which comes with plugins to display news records in lists or as a single view. The news records are stored in a custom database table and can be edited in the backend (in the list module).
</p>
<h2 class="mb-20">Editing</h2>
<p>
    How to work with content elements and plugins?<br>
    The “Getting Started Tutorial” describes how to work with page content The “Tutorial for Editors” describes the basic TYPO3 content elements and how to work with them. Additional descriptions can be found the fluid_styled_content documentation.
</p>
<h2 class="mb-20">Customizing</h2>
<p>
    Backend Layouts can be configured to define how content elements are arranged in the TYPO3 backend (in rows, columns, grids). This can be used in the frontend to determine how the content elements are to be arranged (e.g. in the footer of the page, left column etc.).<br>

    Often content elements and plugins contain a number of fields. Not all of these may be relevant for your site. It is good practice to configure which fields will be displayed in the backend. There are a number of ways to do this:
<ul>
    <li>Backend user and group permissions can be used to restrict access to content elements, to content on specific pages etc.</li>
    <li>Fields can be hidden in the backend by using TSconfig TCEFORM.</li>
    <li>Page TSconfig can be used to configure what is displayed in the “Content Element Wizard”.</li>

</ul>
A typical extension with plugins is the ‘news’ extension which comes with plugins to display news records in lists or as a single view. The news records are stored in a custom database table and can be edited in the backend (in the list module).
</p>
<h2 class="mb-20">Creating new content elements</h2>
<p>
    The following chapters handle how to create your own content element types and plugins. Specifically, check out:
<ul>

    <li>Creating a custom content element</li>
    <li>Configuring the plugin in the “Extbase / Fluid book”</li>
    <li>How to make your plugins or content elements configurable by editors with Flexforms</li>

</ul>
</p>