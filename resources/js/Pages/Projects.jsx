import TerminalIcon2 from "../Assets/Terminal-Icon-2";

export default function Projects({ setting, projects }) {
    return (
        <div className="projects-page-content">
            <div className="projects-page-title">
                <TerminalIcon2 />
                <h2 className="projects-page-title-text">
                    {setting.first_english_name.toLowerCase()}.
                    <span className="blue-text">projects</span>
                </h2>
            </div>
            <div className="projects-page-group">
                {projects.map((project) => (
                    <div className="project-item">
                        <img
                            className="project-item-image"
                            src={project.project_image_url}
                            alt="Project image"
                        />
                    </div>
                ))}
            </div>
        </div>
    );
}
