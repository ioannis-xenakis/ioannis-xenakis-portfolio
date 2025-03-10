export default function Projects({ setting }) {
    return (
        <div className="projects-page-content">
            <div className="projects-page-title">
                <h2 className="projects-page-title-text">
                    {setting.first_english_name.toLowerCase()}.
                    <span className="blue-text">projects</span>
                </h2>
            </div>
        </div>
    );
}